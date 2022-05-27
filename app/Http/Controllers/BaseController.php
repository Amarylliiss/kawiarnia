<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function products(){
        $show = DB::table('menu')->get();
        return view ('welcome', compact('show'));
    }
    public function cake(){
        $show = DB::table('menu')-> where('Kategoria', 'Cake')->get();
        return view ('cake', compact('show'));
    }
    public function drink(){
        $show = DB::table('menu')-> whereBetween('Kategoria', ['Coffee','Tea'])->get();
        return view ('drink', compact('show'));
    }
    public function coffee(){
        $show = DB::table('menu')-> where('Kategoria', 'Coffee')->get();
        return view ('coffee', compact('show'));
    }
    public function tea(){
        $show = DB::table('menu')-> where('Kategoria', 'Tea')->get();
        return view ('tea', compact('show'));
    }
}