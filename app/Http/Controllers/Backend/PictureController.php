<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function picture(){
        return view('admin.layouts.picture');
    }
}
