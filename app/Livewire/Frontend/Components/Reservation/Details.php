<?php

namespace App\Livewire\Frontend\Components\Reservation;

use App\Services\Cart\CartService;
use Livewire\Component;

class Details extends Component
{
    public function render()
    {
        $cart = $this->getCartContent();
        // dd($cart);
        return view('livewire.frontend.components.reservation.details',compact('cart'));
    }

    public function getCartContent()
    {
        $cart = appService(CartService::class)->cartList();

        return $cart['data'];

    }
    public function clearCart(){
        clearCart();
    }
    public function removeItem($id){
       removeItemFromCart($id);
    }
}
