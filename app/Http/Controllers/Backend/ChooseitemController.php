<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ChooseitemController extends Controller
{
    public function choosei(){
        $product = Product::all();
        // dd($chooseitem)
        return view('admin.layouts.chooseitem_list',compact('product'));
    }
    public function store(Request $request){
        
            product::create([
                'plant'=>$request->plant,
                'tool'=>$request->tool,
                'soil'=>$request->soil,
                'pesticide'=>$request->pesticide,
                
            ]);
            return redirect()->route('admin.chooseitem');
    }
}
