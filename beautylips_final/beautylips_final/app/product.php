<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = 'product';
    public $timestamps = false;

    protected $primaryKey = 'productID';

    protected $filltable = [
        'productID',
        'productName',
        'brand',
        'tImage',
        'shades',
        'texture',
        'lip',
        'information',
        'price',
        'out_of_stock'
    ];
}
