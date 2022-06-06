<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductAddController extends Controller
{
    public function create()
    {
        if ((Auth::check() && Auth::user()->role == "1") == false) {
            return redirect()->action([BaseController::class, 'products']);
        }
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