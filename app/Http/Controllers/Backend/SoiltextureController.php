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
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        $request->validate([
            'user_name'=>'required',
            'user_phone_number'=>'required',
            'user_address'=>'required',
            'soil_type'=>'required',
            'image'=>'required',
        ]);
        
        soiltexture::create([
            'user_name'=>$request->user_name,
            'user_phone_number'=>$request->user_phone_number,
            'user_address'=>$request->user_address,
            'soil_type'=>$request->soil_type,
            'image'=>$filename,
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
    public function soiltextureEdit($id)
    {

        $soiltexture=Soiltexture::find($id);
//        $product=Product::where('user_id',$id)->first();

//        dd($product);
//        dd($all_categories);
        return view('admin.layouts.soil_texture_edit',compact('soiltexture'));

    }
    public function soiltextureUpdate(Request $request,$id)
    {   
        // dd($request->all());

        $soiltexture=Soiltexture::find($id);
        $image_name=$soiltexture->image;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);

        }


        $soiltexture->update([
            // field name from db || field name from form
            'user_name'=>$request->user_name,
            'user_phone_number'=>$request->user_phone_number,
            'user_address'=>$request->user_address,
            'soil_type'=>$request->soil_type,
            'image'=>$filename,
        ]);
        return redirect()->route('admin.soil_texture')->with('success','Product Updated Successfully.');

    }

    public function soiltexturedelete($id){
        Soiltexture::find($id)->delete();
        return redirect()->back()->with('success','Soiltexture Deleted');

    }
}
