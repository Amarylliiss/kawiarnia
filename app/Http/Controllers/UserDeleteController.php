<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;


class UserDeleteController extends Controller {
        public function index(){
            $users= DB::select('select * from users');
            return view('user-delete',['users' => $users]);
        }
        public function destroy($id) {
            DB::delete('delete from users where id = ?',[$id]);
            return redirect() -> to('user-delete');
        }           
}