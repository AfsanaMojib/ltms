<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedbacklist(){
        $feedback=Feedback::all();
        return view('admin.layouts.feedback_list',compact('feedback'));
    }
    public function store(Request $request){
        feedback::create([
            'user_name'=>$request->user_name,
            'user_email'=>$request->user_email,
            'user_phone_number'=>$request->user_phone_number,
            'user_feedback'=>$request->user_feedback,

        ]);
        return redirect()->route('user.feedback');
    }

    public function feedbackdetails($id)
    {

        //        collection= get(), all()====== read with loop (foreach)
        //       object= first(), find(), findOrFail(),======direct
        $feedback=Feedback::where('id', $id)->first();
        //      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.feedback_details', compact('feedback'));
    }

    public function feedbackdelete($id)
    {
        Feedback::find($id)->delete();
        return redirect()->back()->with('success', 'Feedback Deleted');
    }


}
