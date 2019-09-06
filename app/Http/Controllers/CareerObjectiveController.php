<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareerObjectiveController extends Controller
{
    function index(Request $request){

        $user = PersonalDetails::where('user_id', Auth::user()->id)->first();

        if($user != ""){
            $data = PersonalDetails::find($request->id);
            $data->id = $request->id;
            $data->user_id = $request->user_id;
            $data->name = $request->name;
            $data->career_obj = $request->career_obj;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }else{
            $data = new PersonalDetails();
            $data->user_id = $request->user_id;
            $data->name = $request->name;
            $data->career_obj = $request->career_obj;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }
    }
}
