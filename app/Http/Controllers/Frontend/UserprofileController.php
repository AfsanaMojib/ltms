<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
  public function userprofile()
  {
    $orders = Order::withCount('OrderProducts')->where('user_id', auth()->user()->id)->get();
    return view('website.pages.user_profile', compact('orders'));
  }

  public function userprofileupdate(Request $request)
  {
    // dd($request->all());
    User::where('id',auth()->user()->id)->update([
      'name'=>$request->name,
      'email'=>$request->email,
      'address'=>$request->address,
      'phone_number'=>$request->phone_number,
    ]);
    return redirect()->back();
  }
}
