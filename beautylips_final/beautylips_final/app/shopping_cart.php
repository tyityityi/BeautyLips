<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopping_cart extends Model
{
    //
    public $timestamps = false;

    


    protected $filltable = [
        'productID',
        'customerID',
        'quantity'
    ];

    protected $table = 'shopping_cart';

    
    



    public function product(){
        return $this->belongsTo('App\product');
    }

    public function customer(){
        return $this->belongsTo('APP\customer');
    }
}
