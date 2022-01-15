<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;

use Illuminate\Http\Request;

class ShowUserController extends Controller
{
    public function showuser()
    {
        $feedback=Feedback::all();

        return view('website.pages.showuser_feedback',compact('feedback'));
    }

    public function douserfeedback(Request $request){
    
        feedback::create([
            'user_name'=>$request->user_name,
            'user_email'=>$request->user_email,
            'user_phone_number'=>$request->user_phone_number,
            'user_feedback'=>$request->user_feedback,
            
        ]);
        return redirect()->back();
    }
}
