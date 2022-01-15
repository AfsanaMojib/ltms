<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
        return view('admin.dashboard');
    }
}
