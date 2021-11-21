<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoiltextureController extends Controller
{
    public function soil(){
        return view('admin.layouts.soil_texture');
    }
}
