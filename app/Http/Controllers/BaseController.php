<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class BaseController extends Controller
{
    public function products()
    {
        $show = DB::table('menu')->paginate(10);
        return view('welcome', compact('show'));
    }
    public function cake()
    {
        $show = DB::table('menu')->where('Kategoria', 'Cake')->paginate(10);
        return view('cake', compact('show'));
    }
    public function drink()
    {
        $show = DB::table('menu')->whereBetween('Kategoria', ['Coffee', 'Tea'])->paginate(10);
        return view('drink', compact('show'));
    }
    public function coffee()
    {
        $show = DB::table('menu')->where('Kategoria', 'Coffee')->paginate(10);
        return view('coffee', compact('show'));
    }
    public function tea()
    {
        $show = DB::table('menu')->where('Kategoria', 'Tea')->paginate(10);
        return view('tea', compact('show'));
    }
    public function search(Request $request){
        $query=$request->input('query');
        $searched_items = Product::where('Nazwa','like',"%$query%")->get();
        return view('search', compact('searched_items'));
    }

}
