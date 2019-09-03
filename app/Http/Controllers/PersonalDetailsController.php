<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalDetailsController extends Controller
{
    function index(Request $request){
        dd($request->name);
    }
}
