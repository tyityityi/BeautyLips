<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_product extends Model
{
    //

    public $timestamps = false;
    
    protected $table = 'purchase_product';

    protected $filltable = [
        'productID',
        'PONum',
        'price',
        'quantity'
    ];

    public function purchase_order(){
        return $this->belongsTo('APP\purchase_order');
    }
    
    public function product(){
        return $this->belongsTo('APP\product');
    }



}
