<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Item;

use Illuminate\Http\Request;

class ReportController extends Controller
{


    public function report(Request $request){
        $items = [];
        if($request->has('from_date'))
      {
        $request->validate([
          'from_date' => 'required',
          'to_date' => 'required|date|after_or_equal:from_date',
      ]);

            $items=Item::whereBetween('created_at',[$request->from_date,$request->to_date])->get();
            return view('admin.layouts.report',compact('items'))->with('error','Please select a validate date');
            //dd($items);
        }
        return view('admin.layouts.report',compact('items'))->with('error','Please select a validate date');
      }


    }
    // return view('admin.layouts.report',compact('items'));








