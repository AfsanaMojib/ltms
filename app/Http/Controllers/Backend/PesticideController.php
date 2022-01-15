<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pesticide;
use Illuminate\Http\Request;

class PesticideController extends Controller
{
    public function pesticide(Request $request)
    {

        $pesticide = Pesticide::all();
        // dd($pesticide);
        return view('admin.layouts.pesticide', compact('pesticide'));
    }
    public function pesticideform()
    {
        return view('admin.layouts.pesticide_form');
    }

    public function store(Request $request)
    {
        $request->validate([

            'pesticide_name' => 'required',
            'pesticide_type' => 'required',
            'pesticide_details' => 'required',
            'pesticide_price' => 'required',
        ]);

        pesticide::create([
            'pesticide_name' => $request->pesticide_name,
            'pesticide_type' => $request->pesticide_type,
            'pesticide_details' => $request->pesticide_details,
            'pesticide_price' => $request->pesticide_price,
        ]);
        return redirect()->route('admin.pesticide.list');
    }
    public function pesticidedetails($id)
    {

        //        collection= get(), all()====== read with loop (foreach)
        //       object= first(), find(), findOrFail(),======direct
        $pesticide = Pesticide::where('id', $id)->first();
        //      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.pesticide_details', compact('pesticide'));
    }
    public function pesticidedelete($id)
    {
        Pesticide::find($id)->delete();
        return redirect()->back()->with('success', 'Pesticide Deleted');
    }
}
