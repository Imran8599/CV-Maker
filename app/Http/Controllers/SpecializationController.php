<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Specilization;

class SpecializationController extends Controller
{
    function index(Request $request){

        $user = Specilization::where('user_id', Auth::user()->id)->first();

        if($user != ""){
            $data = Specilization::find($request->id);
            $data->id = $request->id;
            $data->user_id = $request->user_id;
            $data->specialization = $request->specialization;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }else{
            $data = new Specilization();
            $data->user_id = $request->user_id;
            $data->specialization = $request->specialization;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }
    }
}
