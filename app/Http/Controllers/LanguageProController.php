<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\LanguageProficiency;

class LanguageProController extends Controller
{
    function index(Request $request){

        $user = LanguageProficiency::where('user_id', Auth::user()->id)->first();

        if($user != ""){
            $data = LanguageProficiency::find($request->id);
            $data->id = $request->id;
            $data->user_id = $request->user_id;
            $data->language = $request->language;
            $data->reading = $request->reading;
            $data->writing = $request->writing;
            $data->speaking = $request->speaking;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }else{
            $data = new LanguageProficiency();
            $data->user_id = $request->user_id;
            $data->language = $request->language;
            $data->reading = $request->reading;
            $data->writing = $request->writing;
            $data->speaking = $request->speaking;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }
    }
}
