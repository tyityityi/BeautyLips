<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_review extends Model
{
    //
    protected $fillable = [
        'productID',
        'customerID',
        'PONum',
        'reviews',
        'updated_at',
        'created_at'
    ];

    public function customer(){
        return $this->belongsTo('APP\customer');
    }

    public function purchase_order(){
        return $this->belongsTo('APP\purchase_order');
    }
    
    public function product(){
        return $this->belongsTo('APP\product');
    }
}
