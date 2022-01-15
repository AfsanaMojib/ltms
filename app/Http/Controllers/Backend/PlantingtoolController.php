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
        $request->validate([
            'user_name'=>'required',
            'user_phone_number'=>'required',
            'user_address'=>'required',
            'tool_type'=>'required',


        ]);
        plantingtool::create([
            'user_name'=>$request->user_name,
            'user_phone_number'=>$request->user_phone_number,
            'user_address'=>$request->user_address,
            'tool_type'=>$request->tool_type,
        ]);
        return redirect()->route('admin.plantingtool');
    }
    public function plantingtooldetails($id)
    {

          //        collection= get(), all()====== read with loop (foreach)
          //       object= first(), find(), findOrFail(),======direct
      $plantingtool=Plantingtool::where('id',$id)->first();
       //      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.plantingtool_details',compact('plantingtool'));
    }
    
    public function plantingtoolEdit($id)
    {

        $plantingtool=Plantingtool::find($id);
//        $product=Product::where('user_id',$id)->first();

//        dd($product);
//        dd($all_categories);
        return view('admin.layouts.plantingtool_edit',compact('plantingtool'));

    }

    public function plantingtooldelete($id){
        Plantingtool::find($id)->delete();
        return redirect()->back()->with('success','Plantingtool Deleted');

    }
    public function plantingtoolUpdate(Request $request,$id)
    {


        $plantingtool=Plantingtool::find($id);




        $plantingtool->update([
            // field name from db || field name from form
            'user_name'=>$request->user_name,
            'user_phone_number'=>$request->user_phone_number,
            'user_address'=>$request->user_address,
            'tool_type'=>$request->tool_type,
        ]);
        return redirect()->route('admin.plantingtool')->with('success',' Updated Successfully.');

    }



}