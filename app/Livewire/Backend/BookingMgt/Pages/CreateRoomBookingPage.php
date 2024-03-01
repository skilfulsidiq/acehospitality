<?php

namespace App\Http\Livewire\Features\BookingMgt\Pages;

use App\Models\RoomGroup;
use App\Services\Booking\AvailabilityService;
use App\Services\Booking\RoomBookingService;
use App\Services\Cart\CartService;
use Carbon\Carbon;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\DB;

class CreateRoomBookingPage extends Component
{
    public $date;
    public $firstname,$lastname,$email,$phone;
    public $hasChecked=false;
    protected $allRoomGroup;
    public $start_date;
    public $end_date;
    public $selectedRoom;
    public $allRooms = [];
    public $carts = [];
    public $all_qty = [];
    public $checkingLoading=false;
    public function mount(){
        $this->date = Carbon::today()->format('d-m-Y')." to ". Carbon::tomorrow()->format('d-m-Y');
        $this->allRoomGroup = collect();
        $this->getCartContent();
        $this->prefilAllQty();
        // dd($this->all_qty);
    }
    public function updatedSelectedRoom($value){
        $arr = explode("-",$value);
        $qty = $arr[0];
        $room_id = $arr[1];
       $item = $this->getCart($room_id);

       if(is_null($item)){
        $this->addRoom($room_id,$qty);
       }else{
            //update cart
            $a['id'] = $room_id;
            $a['quantity'] = $qty;
            $cart = appService(CartService::class)->updateCart($a);
       }
       $this->all_qty[$room_id] = $qty;
    //
        return redirect(request()->header('Referer'));
    //    dd($item);
    }
    public function prefilAllQty(){
        foreach($this->carts as $cart){
            $this->all_qty[$cart->id] = $cart->quantity;
        }
    }
    public function getCart($id){
        return
    appService(CartService::class)->getCartDetails($id)['data'];
    }
    public function removeItem($id){

            appService(CartService::class)->removeCart($id)['data'];
        return redirect(request()->header('Referer'));
    }
    public function addRoom($room_id,$qty=1){


       $room = RoomGroup::where('id',$room_id)->first();


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
            'night' => calculateNight($this->start_date,$this->end_date),
            'arrival_date' => $this->start_date,
            'departure_date' => $this->end_date
        ];
        $cart = appService(CartService::class)->addToCart($r);
        $this->getCartContent();
        // return redirect(request()->header('Referer'));
    }

    public function getCartContent(){
        $cart = appService(CartService::class)->cartList();

        $this->carts = $cart['data'];

    }
    public function clearCart(){
        $cart = appService(CartService::class)->clearAllCart();
        $this->checkingLoading = false;
    }



    public function checkAvailability(){
       $this->hasChecked = true;
       $this->checkingLoading =true;

       $feedback = appService(AvailabilityService::class)->checkForRoomAvailability($this->date);
       $data = $feedback['data'];
    //    dd($data);
    //    $this->allRoomGroup = $data['availables'];
       $this->start_date = $data['start'];
       $this->end_date = $data['end'];
    //    dd("am check");
    $this->checkingLoading =false;
       return
        $data['availables'];
    }

    public function createBooking(){
      $form=   $this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);

        $form['carts'] = $this->carts;
        // dd($form);
        $feedback = appService(RoomBookingService::class)->saveRoomBookings($form);
        $this->clearCart();
        return redirect(request()->header('Referer'));

    }
    public function render()
    {
        // $this->available_rooms = collect();
        $available_rooms = $this->checkAvailability();
        // return view('livewire.features.booking-mgt.pages.create-room-booking-page');
        return view('livewire.features.booking-mgt.pages.create-room-booking-page',compact('available_rooms'));
    }
}
