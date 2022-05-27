<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;


class Product extends Authenticatable
{
    
    protected $table = 'menu';
    public $timestamps = false;
    protected $fillable = [
        'Nazwa',
        'Cena',
        'Waga',
        'Kategoria',
        'image',
        
        
    ];
    
}