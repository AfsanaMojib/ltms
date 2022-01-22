<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
  public function userprofile()
  {
    $orders = Order::withCount('OrderProducts')->where('user_id', auth()->user()->id)->get();
    return view('website.pages.user_profile', compact('orders'));
  }

  public function userprofileupdate(Request $request, $id)
  {

    $user = User::find($id);
    $user->update([
      'name' => $request->name,
      'email' => $request->email,
      'phone_number' => $request->phone_number,
      'address' => $request->address,
    ]);
    return redirect()->route('userprofile');
  }
}
