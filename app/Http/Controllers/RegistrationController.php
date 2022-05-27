<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('signup');
    }
    
    public function store()
    {
        $this->validate(request(), [
            
            'imie' => 'required',
            'nazwisko' => 'required',
            'adres' => 'required',
            'Email' => 'required|email',
            'password' => 'required',
            'role'=> 1,
        ]);
        
        $user = User::create(request(['imie','nazwisko','adres', 'Email', 'password','role']));
        
        auth()->login($user);
        
        return redirect()->to('login');
    }
}