<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CareerSum;

class CareerSummaryController extends Controller
{
    function index(Request $request){

        $user = CareerSum::where('user_id', Auth::user()->id)->first();

        if($user != ""){
            $data = CareerSum::find($request->id);
            $data->id = $request->id;
            $data->user_id = $request->user_id;
            $data->career_sum = $request->career_sum;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }else{
            $data = new CareerSum();
            $data->user_id = $request->user_id;
            $data->career_sum = $request->career_sum;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }
    }
}
