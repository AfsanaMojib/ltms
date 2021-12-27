<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Item;
// use App\Models\Planttype;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function itemlist(){
        $item = Item::all();

        return view('admin.layouts.item_list',compact('item'));
    }
    public function itemform(){
    return view('admin.layouts.item_form');

    }


    public function store(Request $request){
        $request->validate([
            'item_name'=>'required',
            'item_type'=>'required',
            'item_category'=>'required',
            // 'type_id'=>'required',
            'price'=>'required',
            'status'=>'required',
            'description'=>'required',

        ]);
        item::create([
            'item_name'=>$request->item_name,
            'item_type'=>$request->item_type,
            'item_category'=>$request->item_category,
            // 'type_id'=>$request->type_id,
            'price'=>$request->price,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.item');

    }
    public function itemdetails($id)
    {

          //        collection= get(), all()====== read with loop (foreach)
          //       object= first(), find(), findOrFail(),======direct
          $item=Item::where('id',$id)->first();
       //      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.item_details',compact('item'));
    }


    public function itemEdit($id)
    {

        $item=Item::find($id);
//        $product=Product::where('user_id',$id)->first();

//        dd($product);
//        dd($all_categories);
        return view('admin.layouts.item_edit',compact('item'));

    }
    public function itemUpdate(Request $request,$id)
    {


        $item=Item::find($id);




        $item->update([
            // field name from db || field name from form
            'item_name'=>$request->item_name,
            'item_type'=>$request->item_type,
            'item_category'=>$request->item_category,
            'price'=>$request->price,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.item')->with('success','Product Updated Successfully.');

    }







    public function itemdelete($id){
        Item::find($id)->delete();
        return redirect()->back()->with('success','Item Deleted');

    }

}



