<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicQualification;
use Illuminate\Support\Facades\Auth;

class AcademicQuaController extends Controller
{
    function index(Request $request){

        $data = new AcademicQualification();
        $data->user_id = $request->user_id;
        $data->exam_title = $request->exam_title;
        $data->major = $request->major;
        $data->institute = $request->institute;
        $data->result = $request->result;
        $data->pas_year = $request->pas_year;
        $data->duration = $request->duration;
        $result = $data->save();
        if($result){
            return redirect()->back()->with('success','Save successfuly.');
        }else{
            return redirect()->back()->with('danger','Something wrong!');
        }
    }

    function delete($id){
        $row = AcademicQualification::find($id);
        $result = $row->delete();
        if($result){
            return redirect()->back()->with('success','Delete successfuly.');
        }else{
            return redirect()->back()->with('danger','Something wrong!');
        }
    }
}
