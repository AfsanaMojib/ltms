<?php

// namespace App\Http\Controllers\Backend;

// use App\Http\Controllers\Controller;
// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class LoginController extends Controller
// {
//     public function registrationform(){
//         return view('admin.layouts.registration');
//     }
//     public function doregistration(Request $request)
//     {
//         User::create([
//             'name'=>$request->name,
//             'email'=>$request->email,
//             'phone_number'=>$request->phone_number,
//             'address'=>$request->address,
//             'password'=>bcrypt($request->password),

//         ]);
//         return redirect()->route('user.login');
//     }


//     public function loginform(){
//         return view('admin.layouts.login');
//     }
//     public function dologin(Request $request){
//         $userpost=$request->except('_token');
//         if(Auth::attempt($userpost)){
//             return redirect()->route('dashboard');
//         }
//         else
//         return redirect()->route('user.login');
        
//     }
//     public function logout(){
//         Auth::logout();
//         return redirect()->route('dashboard');
//     }
// }
