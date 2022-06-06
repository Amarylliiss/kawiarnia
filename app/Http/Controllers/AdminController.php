<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin()
    {
        if ((Auth::check() && Auth::user()->role == "1") == false) {
            return redirect()->action([BaseController::class, 'products']);
        }
        return view('panel');

        if ((Auth::check() && Auth::user()->role == "1") == false) {
            return redirect()->action([BaseController::class, 'products']);
        }
        return view('order-edit');
        
        if ((Auth::check() && Auth::user()->role == "1") == false) {
            return redirect()->action([BaseController::class, 'products']);
        }
        return view('user-delete');
        
        if ((Auth::check() && Auth::user()->role == "1") == false) {
            return redirect()->action([BaseController::class, 'products']);
        }
        return view('product-delete');

        if ((Auth::check() && Auth::user()->role == "1") == false) {
            return redirect()->action([BaseController::class, 'products']);
        }
        return view('user-edit');

        if ((Auth::check() && Auth::user()->role == "1") == false) {
            return redirect()->action([BaseController::class, 'products']);
        }
        return view('product-edit');

        if ((Auth::check() && Auth::user()->role == "1") == false) {
            return redirect()->action([BaseController::class, 'products']);
        }
        return view('product-add');

    
    }
}
