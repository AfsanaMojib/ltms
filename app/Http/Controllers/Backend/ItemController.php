<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\ItemCategory;
use App\Models\ItemType;
// use App\Models\Planttype;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function itemlist(Request $request)
    {
        $search = $request->query('search');
        if ($search) {
            $items = Item::where('price', 'Like', '%' . $search . '%')
                ->orWhere('item_name', 'like', '%' . $search . '%')->get();
            return view('admin.layouts.item_list', compact('items'));
        }
        $items = Item::with('ItemType', 'category')->get();

        return view('admin.layouts.item_list', compact('items'));
    }
    public function itemform()
    {
        $item_types = ItemType::all();
        $item_categories = ItemCategory::all();
        return view('admin.layouts.item_form', compact('item_types', 'item_categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'item_type_id' => 'required',
            'category_id' => 'required',
            // 'type_id'=>'required',
            'price' => 'required',
            'status' => 'required',
            'description' => 'required',
            'quantity' => 'required',

        ]);
        item::create([
            'item_name' => $request->item_name,
            'item_type_id' => $request->item_type_id,
            'category_id' => $request->category_id,
            // 'type_id'=>$request->type_id,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'quantity' => $request->quantity,
        ]);
        return redirect()->route('admin.item');
    }
    public function itemdetails($id)
    {

        //        collection= get(), all()====== read with loop (foreach)
        //       object= first(), find(), findOrFail(),======direct
        $item = Item::with('ItemType', 'category')->where('id', $id)->first();
        //      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.item_details', compact('item'));
    }


    public function itemEdit($id)
    {

        $item = Item::with('ItemType', 'category')->where('id', $id)->first();
        //        $product=Product::where('user_id',$id)->first();

        //        dd($product);
        //        dd($all_categories);
        $item_types = ItemType::all();
        $item_categories = ItemCategory::all();
        return view('admin.layouts.item_edit', compact('item', 'item_types', 'item_categories'));
    }
    public function itemUpdate(Request $request, $id)
    {


        $item = Item::find($id);




        $item->update([
            // field name from db || field name from form
            'item_name' => $request->item_name,
            'item_type_id' => $request->item_type_id,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.item')->with('success', 'Product Updated Successfully.');
    }







    public function itemdelete($id)
    {
        Item::find($id)->delete();
        return redirect()->back()->with('success', 'Item Deleted');
    }
}
