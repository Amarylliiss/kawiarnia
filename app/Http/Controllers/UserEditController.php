<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class UserEditController extends Controller
{
    public function index()
    {
        $user = User::all();
        if ((Auth::check() && Auth::user()->role == "1") == false) {
            return redirect()->action([BaseController::class, 'products']);
        }
        return view('user-edit', compact('user'));

        }

    public function edit($id)
    {
        $user  = User::find($id);
        return view('user-edit-form', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->Imie = $request->input('Imie');
        $user->Nazwisko = $request->input('Nazwisko');
        $user->Adres = $request->input('Adres');
        $user->Email = $request->input('Email');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        $user->update();
        return redirect()->to('user-edit');
    }
}