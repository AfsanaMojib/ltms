<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stock()
    {
        $stock=Stock::all();
        // dd($stock);
        return view('admin.layouts.stock_list',compact('stock'));
    }
    public function stockform(){
        return view('admin.layouts.stock_form');
    }
    public function store(Request $request){
        $request->validate([
            'tree_name'=>'required',
            'tree_catagory'=>'required',
            'tree_quantity'=>'required',
            'unit_price'=>'required',
        ]);
        stock::create([

            'tree_name'=>$request->tree_name,
            'tree_catagory'=>$request->tree_catagory,
            'tree_quantity'=>$request->tree_quantity,
            'unit_price'=>$request->unit_price,
        ]);
        return redirect()->route('admin.stock');
    }
    public function stockdetails($id)
    {
          $stock=Stock::where('id',$id)->first();
      
        return view('admin.layouts.stock_details',compact('stock'));
    }






    
       

}
