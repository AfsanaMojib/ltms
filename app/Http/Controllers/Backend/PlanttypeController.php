<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Planttype;
use Illuminate\Http\Request;

class PlanttypeController extends Controller
{
    public function plantT(){
        $planttype=Planttype::all();
        // dd($planttype);

    return view('admin.layouts.planttype_list',compact('planttype'));
    }
    public function plantTform(){
        return view('admin.layouts.planttype_form');
    }
    public function store(Request $request){
        $request->validate([
            'plant_name'=>'required',
            'plant_id'=>'required',
            'plant_details'=>'required',
        ]);
        planttype::create([
            'plant_name'=>$request->plant_name,
            'plant_id'=>$request->plant_id,
            'plant_details'=>$request->plant_details,
        ]);
        return redirect()->route('admin.plant.type');
    }
    public function planttypedetails($id)
    {

         
      $planttype=Planttype::where('id',$id)->first();
       
        return view('admin.layouts.planttype_details',compact('planttype'));
    }
    public function planttypedelete($id){
        Planttype::find($id)->delete();
    
        return redirect()->back()->with('success','planttype Deleted.');
    }
}


