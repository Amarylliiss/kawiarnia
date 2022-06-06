<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductDeleteController extends Controller {
        public function index(){
            $products= DB::select('select * from menu');
            if ((Auth::check() && Auth::user()->role == "1") == false) {
                return redirect()->action([BaseController::class, 'products']);
            }
            return view('product-delete',['products' => $products]);
            
        }
        public function destroy($id) {
            DB::delete('delete from menu where id = ?',[$id]);
            return redirect() -> to('product-delete');
        }           
}