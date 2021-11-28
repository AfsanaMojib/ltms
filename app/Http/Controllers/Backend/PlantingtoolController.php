<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Plantingtool;
use Illuminate\Http\Request;


class PlantingtoolController extends Controller
{
    public function plantinglist(){
        $plantingtool = Plantingtool::all();
        return view('admin.layouts.plantingtool_list',compact('plantingtool'));
    }
    public function plantingform(){
        return view('admin.layouts.plantingtool_form');
    }
    public function store(Request $request){
        plantingtool::create([
            'user_name'=>$request->user_name,
            'user_phone_number'=>$request->user_phone_number,
            'user_address'=>$request->user_address,
            'tool_type'=>$request->tool_type,
        ]);
        return redirect()->back();
    }
}