<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function system(){
         return view('admin.dashboard');
     }
     
}
