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
        
    
}
