<?php

namespace App\Livewire\Frontend\Pages\Reservation;

use App\Models\RoomGroup;
use App\Services\Booking\AvailabilityService;
use App\Services\Cart\CartService;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Computed;

class StepOne extends Component
{

    public $booking_form;
    public $rooms_list;

    public $selectedRoom;
    public $carts = [];
    public $all_qty = [];
    public $start_date;
    public $end_date;
    public function mount(){
        $this->rooms = collect();
        $d = getStartAndEndDate(request()->date);
        $this->start_date = $d['start'];
        $this->end_date = $d['end'];
        $this->prefilAllQty();
        // $this->booking_form = getBookingFormDetail();

    }
    public function render()
    {
        $check = $this->checkAvailability();
        $available_rooms = $check['available'];
        $date = $check['date'];
        return view('livewire.frontend.pages.reservation.step-one',compact('available_rooms','date'));
    }

    #[On('available-room-list')]
    public function getAvailableRoomList($data){
        // dd($data);
       $this->booking_form = $data;
    }

    // #[Computed]
    public function checkAvailability(){
        $hotel_id = request()->hotel_id;
        $date = request()->date;

        $feedback = appService(AvailabilityService::class)->checkForRoomAvailability(compact('hotel_id','date'));
        $available = $feedback['data']['availables'];

        return compact('available','date');
    }
    #[On('room-quantity-change')]
    public function updatedSelectedRoom($value)
    {
    
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
        // return redirect(request()->header('Referer'));
    }
}
