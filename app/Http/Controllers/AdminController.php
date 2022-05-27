<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin(){
        if((Auth::check() && Auth::user()->role == "1")==false){
             return redirect()->action([Controller::class,'welcome']);
        }
        return view ('panel');
    }
}
