<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Planttype;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function itemlist(){
        $item = Item::all();

        return view('admin.layouts.item_list',compact('item'));
    }
    public function itemform(){
        $plant_type = Planttype::all();
        return view('admin.layouts.item_form',compact('plant_type'));
    }
    public function store(Request $request){
        $request->validate([
            'item_name'=>'required',
            'item_type'=>'required',
            'item_category'=>'required',
            'type_id'=>'required',
            'price'=>'required',
            'status'=>'required',
            'description'=>'required',

        ]);
        item::create([
            'item_name'=>$request->item_name,
            'item_type'=>$request->item_type,
            'item_category'=>$request->item_category,
            'type_id'=>$request->type_id,
            'price'=>$request->price,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.item');

    }
}



