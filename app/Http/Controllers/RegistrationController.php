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
            
            'imie' => 'required|regex:"[A-Z]{1}[a-z]"|min:3|max:25',
            'nazwisko' => 'required|regex:"[A-Z]{1}[a-z]"|min:3|max:30',
            'adres' => 'required|regex:"[A-Z]{1}[a-z0-9]"',
            'Email' => 'required|email|min:7|max:40|unique:users,Email',
            'password' => 'required|confirmed|min:6|max:40|regex:"^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$"',
            'role'=> '2',
        ],[
            'imie.regex'=>'Imię musi zaczynać się od dużej litery',
            'nazwisko.regex'=>'Nazwisko musi zaczynać się od dużej litery',
            'password.regex'=>'Hasło musi być silne (minimum 1 duża litera, 1 mała litera, 1 znak specjalny, 1 cyfra, minimum 8 znaków długości)',
            'adres.regex'=>'Nazwa ulicy musi zaczynać się od dużej litery',
            'required'=>'Pole :attribute nie może być puste!',
            'unique'=>'Podany :attribute już istnieje!'
        ]);
        $user = User::create(request(['imie','nazwisko','adres', 'Email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/');
    }
}