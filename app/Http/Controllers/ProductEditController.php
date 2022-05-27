<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductEditController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('product-edit', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product-edit-form', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->Nazwa = $request->input('Nazwa');
        $product->Cena = $request->input('Cena');
        $product->Waga = $request->input('Waga');
        $product->Kategoria = $request->input('Kategoria');
        $product->image = $request->input('image');
        $product->update();
        return redirect()->back()->with('status','Product Updated Successfully');
    }
}