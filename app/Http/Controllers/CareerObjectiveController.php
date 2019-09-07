<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CareerObj;

class CareerObjectiveController extends Controller
{
    function index(Request $request){

        $user = CareerObj::where('user_id', Auth::user()->id)->first();

        if($user != ""){
            $data = CareerObj::find($request->id);
            $data->id = $request->id;
            $data->user_id = $request->user_id;
            $data->career_obj = $request->career_obj;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }else{
            $data = new CareerObj();
            $data->user_id = $request->user_id;
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
