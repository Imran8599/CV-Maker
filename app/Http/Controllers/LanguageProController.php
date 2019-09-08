<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\LanguageProficiency;

class LanguageProController extends Controller
{
    function index(Request $request){

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

    function delete($id){
        $row = LanguageProficiency::find($id);
        $result = $row->delete();
        if($result){
            return redirect()->back()->with('success','Delete successfuly.');
        }else{
            return redirect()->back()->with('danger','Something wrong!');
        }
    }
}
