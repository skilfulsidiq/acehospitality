<?php

namespace App\Livewire\Frontend\Pages\Reservation;

use App\Services\Booking\AvailabilityService;
use App\Services\Booking\RoomBookingService;
use App\Services\Cart\CartService;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Rule;

class MainPage extends Component
{

    public $step = 1;
    public $totalStep = 4;

    #[Rule('required')]
    public $fullname;

    #[Rule('required | email')]
    public $email;

    #[Rule('required')]
    public $phone;


    public function render()
    {
        $check = $this->checkAvailability();
        $available_rooms = $check['available'];
        $date = $check['date'];
        $cart = $this->getCartContent();
        return view('livewire.frontend.pages.reservation.main-page',compact('cart','available_rooms','date'));
    }
    public function checkAvailability()
    {
        $hotel_id = request()->hotel_id;
        $date = request()->date;

        $feedback = appService(AvailabilityService::class)->checkForRoomAvailability(compact('hotel_id', 'date'));
        $available = $feedback['data']['availables'];

        return compact('available', 'date');
    }

    public function nextStep(){
        if($this->step < $this->totalStep)$this->step++;

    }
    public function previousStep(){
       if($this->step> 1) $this->step--;
    }
    public function clearCart(){
        clearCart();
    }
    public function getCartContent()
    {
        $cart = appService(CartService::class)->cartList();

        return $cart['data'];

    }
    public function removeItem($id)
    {

        appService(CartService::class)->removeCart($id)['data'];
        return redirect(request()->header('Referer'));
    }

    public function submitReservation(){
       $t =  $this->validate();
    $form = ['hotel_id'=>request()->hotel_id??1,
        'email'=>$t['email'],'phone'=>$t['phone'],'firstname'=>$t['fullname'],'lastname'=>$t['fullname'],   'carts'=>$this->getCartContent()];
        $feedback = appService(RoomBookingService::class)->saveRoomBookings($form);
        if($feedback['status']){
            clearCart();
            return redirect()->route('home');// this is coming from booking helper
        }

        dd($feedback);
    }
}
