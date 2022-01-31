<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Item;
use App\Models\Feedback;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // dd(auth()->user()->role);
        if(auth()->user()->role =='user') { return redirect('/'); }

        $count[ 'user']=User::all()->count();
        $count['items']=Item::all()->count();
        $count['feedback']=Feedback::all()->count();

        return view('admin.dashboard',compact('count'));
    }
}

