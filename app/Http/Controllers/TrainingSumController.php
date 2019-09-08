<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\TrainingSummary;

class TrainingSumController extends Controller
{
    function index(Request $request){

        $data = new TrainingSummary();
        $data->user_id = $request->user_id;
        $data->title = $request->title;
        $data->topic = $request->topic;
        $data->institute = $request->institute;
        $data->location = $request->location;
        $data->country = $request->country;
        $data->year = $request->year;
        $data->duration = $request->duration;
        $result = $data->save();
        if($result){
            return redirect()->back()->with('success','Save successfuly.');
        }else{
            return redirect()->back()->with('danger','Something wrong!');
        }
    }
    function delete($id){
        $row = TrainingSummary::find($id);
        $result = $row->delete();
        if($result){
            return redirect()->back()->with('success','Delete successfuly.');
        }else{
            return redirect()->back()->with('danger','Something wrong!');
        }
    }
}
