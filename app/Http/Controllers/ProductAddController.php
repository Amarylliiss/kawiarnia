<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductAddController extends Controller
{
    public function create()
    {
        return view('product-add');
    }
    
    public function store()
    {
        $this->validate(request(), [
            
            'Nazwa' => 'required',
            'Cena' => 'required',
            'Waga' => 'required',
            'Kategoria' => 'required',
            'image'=>'required',

            ],[
                'Nazwa.required'=> "xyz",
                'Cena.required'=> "xyz",
                'Waga.required'=> "xyz",
                'Kategoria.required'=> "xyz",
                'image.required'=> "xyz",
            ]);
        
        Product::create(request(['Nazwa','Cena','Waga', 'Kategoria','image']));
        return redirect()->to('product-add');
    }
}