<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesticideController extends Controller
{
    public function pesticide(){
        return view('admin.layouts.pesticide');
    }
    public function pesticide_form(){
        return view('admin.layouts.pesticide_form');
    }
}
