<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use App\Models\Planttype;
use Illuminate\Http\Request;

class PlantnameController extends Controller
{
    public function plantlist(){
        $plant = Plant::with('planttype')->get();
        // dd($plant);
        return view('admin.layouts.plantname_list',compact('plant'));
    }
    public function Plantname(){
        $planttype=Planttype::all();
    
        return view('admin.layouts.Plantname_form',compact('planttype'));
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

    public function plantnamedetails($plant_id)
    {

          //        collection= get(), all()====== read with loop (foreach)
          //       object= first(), find(), findOrFail(),======direct
      $plant=Plant::where('plant_id',$plant_id)->first();
       //      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.plantname_details',compact('plant'));
    }

    public function plantnamedelete($id){
        $cc=Plant::find($id)->delete();
    
        return redirect()->back()->with('success','plantname Deleted.');
    }
}
