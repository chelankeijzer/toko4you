<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderline extends Model
{
    //
    protected $fillable = [
        'orderId',
        'productId',
        'number',
        'price',
    ];


}
