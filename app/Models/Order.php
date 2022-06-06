<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class Order extends Model
{
    
    protected $table = 'orders';
    protected $fillable =[
        'id',
        'user_id',
        'product_id',
        'quantity',
        'amount',

    ];
    
}