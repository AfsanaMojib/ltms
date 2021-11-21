<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlantnameController extends Controller
{
    public function plant(){
        return view('admin.layouts.plant_name');
    }
}
