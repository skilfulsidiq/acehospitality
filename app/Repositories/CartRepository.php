<?php

namespace App\Repositories;

use App\Model\User;
use App\Repositories\BaseRepository;
// use Cart;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version November 11, 2019, 12:47 pm IST
 */

class CartRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'username',
        'address',
        'description',
        'password',
        'status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        // return User::class;
    }

    public function getCartList(){}
    public function addToCart($request){

        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,

            'quantity' => $request->quantity,
            // 'associatedModel' => $roomGrup,
            'attributes' => [
                'night' => $request->night,
                'arrival' => formatBookingDate($request->arrival),
                'departure' => formatBookingDate($request->departure),
            ]
        ]);
    }
    public function removeFromCart(){}
}
