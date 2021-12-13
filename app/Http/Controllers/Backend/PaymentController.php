<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(){
        $payment = Payment::all();
        // dd($payment);
        return view('admin.layouts.payment_create',compact('payment'));
    }

    public function paymentform(){
        return view('admin.layouts.payment_form');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
            'product_type'=>'required',
            'product_quantity'=>'required',
            'product_price'=>'required',
        ]);
        payment::create([
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'product_type'=>$request->product_type,
            'product_quantity'=>$request->product_quantity,
            'product_price'=>$request->product_price,

        ]);
        return redirect()->route('admin.payment.create');
    }
}
