<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalDetails;
use App\CareerObj;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth' => 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function edit()
    {
        $user = PersonalDetails::where('user_id', Auth::user()->id)->first();
        $user_obj = CareerObj::where('user_id', Auth::user()->id)->first();
        return view('edit',compact('user','user_obj'));
    }


}
