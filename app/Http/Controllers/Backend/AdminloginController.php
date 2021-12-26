<?php

// namespace App\Http\Controllers\Backend;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;


// class AdminloginController extends Controller
// {
//     public function login()
//     {
//         return view('admin.admin_login');
//     }


//     public function doLogin(Request $request)
//     {

       
//         $userInfo=$request->except('_token');



//         if(Auth::attempt($userInfo)){
//             return redirect()->route('dashboard')->with('message','Login successful.');
//         }
//         return redirect()->back()->withErrors('Invalid user credentials');

//     }

//     public function logout()
//     {
//         Auth::logout();
//         return redirect()->route('admin.login')->with('message','Logging out.');
//     }
// }
