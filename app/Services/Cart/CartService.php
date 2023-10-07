<?php

namespace App\Services\Cart;

use App\Models\RoomGroup;
use App\Services\BaseService;
use Cart;
class CartService extends BaseService
{
    public function __construct(RoomGroup $r)
    {
        parent::__construct($r);
    }
    public function cartList()
    {
        $cartItems = Cart::getContent();
        // dd($cartItems);


        return $this->success("carts",$cartItems);
    }


    public function adminAddCart($arr)
    {
        // dd($request->
        $roomGrup = RoomGroup::find($arr['id']);
        // dd($show);

       \Cart::add([
            'id' => $roomGrup->id,
            'name' => $arr['name'],
            'price' => $arr['price'],

            'quantity' => $arr['quantity'],
            // 'associatedModel' => $roomGrup,
            'attributes' => [
                'night' => $arr['night'],
                'arrival' => $arr['arrival'],
                'departure' => $arr['departure'],
            ]
        ]);
        // session()->flash('success', 'Room  Added to Booking Successfully !');
        // if($show=="true"){
        //     return  redirect()->back();
        // }
        return $this->success("carts", true);

        // dd("ok");
        //
        // return response()->json("success");
        // return  redirect()->back();


    }
    public function adminRemoveCart($id)
    {
        \Cart::remove($id);
        // session()->flash('success', 'Room Booking Remove Successfully !');
        return $this->success("carts", true);
    }
    public function addToCart($arr)
    {
        // dd();

        $roomGrup = RoomGroup::find($arr['id']);

        \Cart::add([
            'id' => $roomGrup->id,
            'name' => $arr['name'],
            'price' => $arr['price'],
            // 'night' => $arr['night'],

            'quantity' => $arr['quantity'],
            // 'associatedModel' => $roomGrup,
            'attributes' => [
                'night' => $arr['night'],
                'arrival' => formatDateToDMY($arr['arrival_date']),
                'departure' => formatDateToDMY($arr['departure_date']),
            ]
        ]);

        return $this->success("carts", true);

        // dd("ok");
        //
        // return response()->json("success");


    }

    public function updateCart($arr)
    {
        \Cart::update(
            $arr['id'],
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $arr['quantity']
                ],
            ]
        );
        return $this->success("carts", true);
    }
    public function getCartDetails($id)
    {
       $t =  Cart::get($id);
        return $this->success("carts", $t);
    }
    public function removeCart($id)
    {
        \Cart::remove($id);
        // session()->flash('success', 'Room Booking Remove Successfully !');
        return $this->success("carts", true);
    }

    public function clearAllCart()
    {
        \Cart::clear();
        // session()->flash('success', 'Room Booking Remove Successfully !');
        return $this->success("carts", true);
    }
}
