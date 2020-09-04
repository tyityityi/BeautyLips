<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class customer extends Authenticatable
{
    use Notifiable;
    protected $table = 'customer';
    public $timestamps = false;
    protected $primaryKey = 'customerID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','shippingAdr',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
////$purchaseA = App\purchase_product::leftjoin('product','purchase_product.productID','=','product.productID')->leftjoin('purchase_order','purchase_product.PONum','=','purchase_order.PONum')->leftjoin('customer','purchase_order.customerID','=','customer.customerID')->first()
