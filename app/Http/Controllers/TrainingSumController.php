<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingSumController extends Controller
{
    function index(Request $request){

        $user = PersonalDetails::where('user_id', Auth::user()->id)->first();

        if($user != ""){
            $data = PersonalDetails::find($request->id);
            $data->id = $request->id;
            $data->user_id = $request->user_id;
            $data->name = $request->name;
            $data->f_name = $request->f_name;
            $data->m_name = $request->m_name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->p_address = $request->p_address;
            $data->c_address = $request->c_address;
            $data->religion = $request->religion;
            $data->gender = $request->gender;
            $data->marital_status = $request->marital_status;
            $data->nationality = $request->nationality;
            $data->date_of = $request->date_of;
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
            $data->f_name = $request->f_name;
            $data->m_name = $request->m_name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->p_address = $request->p_address;
            $data->c_address = $request->c_address;
            $data->religion = $request->religion;
            $data->gender = $request->gender;
            $data->marital_status = $request->marital_status;
            $data->nationality = $request->nationality;
            $data->date_of = $request->date_of;
            $result = $data->save();
            if($result){
                return redirect()->back()->with('success','Save successfuly.');
            }else{
                return redirect()->back()->with('danger','Something wrong!');
            }
        }
    }
}
