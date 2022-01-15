<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function user(){
         $user=User::all();
        //  dd($user);
         return view('admin.layouts.user',compact('user'));
     }

     public function store(Request $request){
        stock::create([

           
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'role'=>$request->role,
        ]);
        return redirect()->back();
    }
     
}
