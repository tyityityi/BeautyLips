<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_image extends Model
{
    //
    protected $table = 'detail_image';
    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $filltable = [
        'productID',
        'dImage',
        'id'
    ];
}
