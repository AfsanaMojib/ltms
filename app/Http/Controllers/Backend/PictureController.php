<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function picturelist()
    {
        return view('admin.layouts.picture');
    }
    public function pictureform()
    {
        return view('admin.layouts.picture.form');
    }
}
