<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderEditController extends Controller
{
    public function index()
    {
        $order = OrderItem::all();
        if ((Auth::check() && Auth::user()->role == "1") == false) {
            return redirect()->action([BaseController::class, 'products']);
        }
        
        return view('order-edit', compact('order'));
    }

    public function edit($id)
    {
        $order = OrderItem::find($id);
        return view('order-edit-form', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = OrderItem::find($id);
        $order->order_id = $request->input('order_id');
        $order->product_id = $request->input('product_id');
        $order->quantity = $request->input('quantity');
        $order->amount = $request->input('amount');
        $order->update();
        return redirect()->to('order-edit');
    }
}