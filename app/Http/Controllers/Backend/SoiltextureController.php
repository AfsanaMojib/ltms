<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Soiltexture;
use Illuminate\Http\Request;

class SoiltextureController extends Controller
{
    public function soil(){
        $soiltexture = Soiltexture::all();
        // dd($soiltexture);
        return view('admin.layouts.soil_texture',compact('soiltexture'));
    }
    public function soilform(){
        return view('admin.layouts.soil_texture_form');
    }
    public function add(Request $request){
        $request->validate([
            'user_name'=>'required',
            'user_phone_number'=>'required',
            'user_address'=>'required',
            'soil_type'=>'required',
        ]);
        soiltexture::create([
            'user_name'=>$request->user_name,
            'user_phone_number'=>$request->user_phone_number,
            'user_address'=>$request->user_address,
            'soil_type'=>$request->soil_type,
        ]);
        return redirect()->route('admin.soil_texture');
    }
    public function soiltexturedetails($id)
    {

          //        collection= get(), all()====== read with loop (foreach)
          //       object= first(), find(), findOrFail(),======direct
          $soiltexture=Soiltexture::where('id',$id)->first();
       //      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.soiltexture_details',compact('soiltexture'));
    }
    public function soiltexturedelete($id){
        Soiltexture::find($id)->delete();
        return redirect()->back()->with('success','Soiltexture Deleted');

    }
}
