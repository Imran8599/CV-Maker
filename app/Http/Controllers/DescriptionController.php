<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Description;

class DescriptionController extends Controller
{
    function index(Request $request){

        $user = Description::where('user_id', Auth::user()->id)->first();

        if($user != ""){
            $data = Description::find($request->id);
            $data->id = $request->id;
            $data->user_id = $request->user_id;
            $data->description = $request->description;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }else{
            $data = new Description();
            $data->user_id = $request->user_id;
            $data->description = $request->description;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }
    }
}
