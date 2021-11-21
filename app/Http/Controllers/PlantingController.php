<?php

namespace App\Http\Controllers;
use App\Models\PlantingTool;

use Illuminate\Http\Request;

class PlantingController extends Controller
{
    public function tool(){
        return view('admin.layouts.planting_tool');
    }
    public function store(Request $request){
        plantingtool::create([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->back();
    }
}
