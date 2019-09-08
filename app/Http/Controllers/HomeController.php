<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalDetails;
use App\CareerObj;
use App\CareerSum;
use App\SpecialQul;
use App\AcademicQualification;
use App\TrainingSummary;
use App\Specilization;
use App\Description;
use App\LanguageProficiency;
use App\Reference;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth' => 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('home');
    }

    public function demo(){
        return view('demo');
    }

    public function edit(){
        $per_det = PersonalDetails::where('user_id', Auth::user()->id)->first();
        $car_obj = CareerObj::where('user_id', Auth::user()->id)->first();
        $car_sum = CareerSum::where('user_id', Auth::user()->id)->first();
        $spe_qul = SpecialQul::where('user_id', Auth::user()->id)->first();
        $aca_quas = AcademicQualification::where('user_id', Auth::user()->id)->get();
        $tra_sums = TrainingSummary::where('user_id', Auth::user()->id)->get();
        $specials = Specilization::where('user_id', Auth::user()->id)->get();
        $description = Description::where('user_id', Auth::user()->id)->first();
        $languages = LanguageProficiency::where('user_id', Auth::user()->id)->get();
        $reference = Reference::where('user_id', Auth::user()->id)->first();
        return view('edit',compact('per_det','car_obj','car_sum','spe_qul','aca_quas','tra_sums','specials','description','languages','reference'));
    }


}
