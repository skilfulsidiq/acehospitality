<?php

namespace App\Livewire\Frontend\Components\PropertyCards;

use App\Models\RoomGroup;
use App\Services\Cart\CartService;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\Attributes\On;

class VersionOne extends Component
{
    public $room;
    public $date;

    public $selectedRoom;
    public $selectedRoomNumber='';

    public $start_date;
    public $end_date;
    public $all_qty = [];

   public function mount($room,$date){
    $this->room = $room;
    $this->date = $date;
        $d = getStartAndEndDate($date);
        $this->start_date = $d['start'];
        $this->end_date = $d['end'];
   }
    public function render()
    {
        $available_room_count = $this->getAvailableNumber();
        $item = $this->getRoomCartItem();
        $selectedNumber = 0;
        if (!is_null($item)) {
            $selectedNumber = $item['quantity'];
        }

        return view('livewire.frontend.components.property-cards.version-one',compact('available_room_count','item','selectedNumber'));
    }

    #[Computed]
    public function amenities(){
        $amenities = explode(',', $this->room->amenities);
        return $amenities;
    }
    public function getRoomCartItem(){
        // return getRoomCartItem($this->room->id);
    return $this->getCart($this->room->id);
    }
    public function getAvailableNumber(){
        $room = $this->room;
          $booked_count = countBookedRooms($room->id, $this->date);
        $available_room_count = $room->no_of_rooms - $room->no_reserved_room - $booked_count;
        return $available_room_count;
    }

    public function updatedSelectedRoom2($value){
        // dd($value);
        // room-quantity-change'
        $this->dispatch('room-quantity-change',value:$value);
    }
    public function updatedSelectedRoom($value)
    {

        // dd($value);
        $arr = explode("-", $value);
        $qty = $arr[0];
        $room_id = $arr[1];
        $item = $this->getCart($room_id);

        if (is_null($item)) {
            $this->addRoom($room_id, $qty);
        } else {
            //update cart
            $a['id'] = $room_id;
            $a['quantity'] = $qty;
            $cart = appService(CartService::class)->updateCart($a);
        }
        $this->all_qty[$room_id] = $qty;

        // dd($this->all_qty);
        //
        // return redirect(request()->header('Referer'));
        //    dd($item);
    }
    public function prefilAllQty()
    {
        foreach ($this->carts as $cart) {
            $this->all_qty[$cart->id] = $cart->quantity;
        }
    }
    public function getCart($id)
    {
        return
            appService(CartService::class)->getCartDetails($id)['data'];
    }
    public function removeItem($id)
    {

        appService(CartService::class)->removeCart($id)['data'];
        return redirect(request()->header('Referer'));
    }
    public function addRoom($room_id, $qty = 1)
    {


        $room = RoomGroup::where('id', $room_id)->first();


        // $r = [
        //     'id' => $room['id'],
        //     'price' => $room['price'],
        //     'name'=>$room['name'],
        //     'quantity' => $qty,
        //     'night' => 0,
        //     'arrival_date' => $this->start_date,
        //     'departure_date' => $this->end_date
        // ];
        $r = [
            'id' => $room->id,
            'price' => $room->price,
            'name' => $room->name,
            'quantity' => $qty,
            'night' => calculateNight($this->start_date, $this->end_date),
            'arrival_date' => $this->start_date,
            'departure_date' => $this->end_date
        ];
        $cart = appService(CartService::class)->addToCart($r);
        // $this->getCartContent();
        // $this->dispatch('')
        return redirect(request()->header('Referer'));
    }

}
