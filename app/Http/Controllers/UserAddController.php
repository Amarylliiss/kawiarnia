<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserAddController extends Controller
{
    public function create()
    {
        if ((Auth::check() && Auth::user()->role == "1") == false) {
            return redirect()->action([BaseController::class, 'products']);
        }
        return view('user-add');
    }

    public function store()
    {
        $this->validate(request(), [

            'imie' => 'required',
            'nazwisko' => 'required',
            'adres' => 'required',
            'Email' => 'required|email',
            'password' => 'required',
            'role',
            
        ]);

        User::create(request(['imie','nazwisko','adres', 'Email', 'password','role']));
        return redirect()->to('user-add');
    }
}
