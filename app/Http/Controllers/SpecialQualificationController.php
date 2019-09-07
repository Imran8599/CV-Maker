<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SpecialQul;

class SpecialQualificationController extends Controller
{
    function index(Request $request){

        $user = SpecialQul::where('user_id', Auth::user()->id)->first();

        if($user != ""){
            $data = SpecialQul::find($request->id);
            $data->id = $request->id;
            $data->user_id = $request->user_id;
            $data->special_qua = $request->special_qua;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }else{
            $data = new SpecialQul();
            $data->user_id = $request->user_id;
            $data->special_qua = $request->special_qua;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }
    }
}
