<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function userR(){
        return view('website.pages.registration');

    }
}
