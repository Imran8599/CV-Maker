<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Specilization;

class SpecializationController extends Controller
{
    function index(Request $request){

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

    function delete($id){
        $row = Specilization::find($id);
        $result = $row->delete();
        if($result){
            return redirect()->back()->with('success','Delete successfuly.');
        }else{
            return redirect()->back()->with('danger','Something wrong!');
        }
    }
}
