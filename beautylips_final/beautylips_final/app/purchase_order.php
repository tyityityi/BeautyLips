<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_order extends Model
{
    //

    public $timestamps = false;

    protected $table = 'purchase_order';


    protected $filltable = [
        'status',
        'customerID',
        'shipping_time',
        'cancel_time',
        'cancel_by'
    ];

    public function customer(){
        return $this->belongsTo('APP\customer');
    }



}
