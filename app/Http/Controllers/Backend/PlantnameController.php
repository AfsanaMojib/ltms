<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;

class PlantnameController extends Controller
{
    public function plantlist(){
        $plant = Plant::all();
        // dd($plant);
        return view('admin.layouts.plantname_list',compact('plant'));
    }
    public function Plantname(){
        return view('admin.layouts.Plantname_form');
    }
    public function store(Request $request){
        $request->validate([
            'plant_name'=>'required',
            'plant_id'=>'required',
            'plant_type'=>'required',
            'plant_quantity'=>'required',
        ]);
        plant::create([
            'plant_name'=>$request->plant_name,
            'plant_id'=>$request->plant_id,
            'plant_type'=>$request->plant_type,
            'plant_quantity'=>$request->plant_quantity,



        ]);
        return redirect()->route('admin.plant.name');
    }
}
