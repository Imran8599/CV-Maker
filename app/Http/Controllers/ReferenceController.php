<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reference;

class ReferenceController extends Controller
{
    function index(Request $request){

        $user = Reference::where('user_id', Auth::user()->id)->first();

        if($user != ""){
            $data = Reference::find($request->id);
            $data->id = $request->id;
            $data->user_id = $request->user_id;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->organization = $request->organization;
            $data->designation = $request->designation;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }else{
            $data = new Reference();
            $data->user_id = $request->user_id;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->organization = $request->organization;
            $data->designation = $request->designation;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }
    }
}
