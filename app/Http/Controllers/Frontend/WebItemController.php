<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Product;

use Illuminate\Http\Request;

class WebItemController extends Controller
{
    public function webitem(){
        $items = Item::with('ItemType', 'category')->get();

        return view('website.pages.item',compact('items'));
    }

    public function douseritem(Request $request){
        // dd($request->all());
        
        product::create([
            'plant'=>$request->plant,
            'tool'=>$request->tool,
            'soil'=>$request->soil,
            'pesticide'=>$request->pesticide,
            
        ]);
        return redirect()->back()->with('msg','Thank You');
}

}
