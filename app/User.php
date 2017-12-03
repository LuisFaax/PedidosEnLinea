<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //relacion entre user y cart
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    //accesso cart_id
    public function getCartAttribute()
    {
        $cart = $this->carts()->where('status', 'Active')->first();
        
        if($cart)
                return $cart;

        //else, le creamos un carrito
            $cart = new Cart();
            $cart->status = 'Active';
            $cart->user_id = $this->id;
            $cart->save();

            return $cart;

    }
}
