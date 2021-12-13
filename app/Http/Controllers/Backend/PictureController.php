<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Picture;

class PictureController extends Controller
{
    public function picturelist()
    {
        $pictures = Picture::all();
        // dd($picture);
        return view('admin.layouts.picture',compact('pictures'));
    }
    public function pictureform()
    {
        return view('admin.layouts.picture_form');
    }
    public function store(Request $request){
        $request->validate([
            'user_name'=>'required',
            'user_id'=>'required',
            'image'=>'required',
            'image_type'=>'required',
        ]);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        picture::create([
            'user_name'=>$request->user_name,
            'user_id'=>$request->user_id,
            'image'=>$filename,
            'image_type'=>$request->image_type,
        ]);
        return redirect()->route('admin.picture');
    }
}
