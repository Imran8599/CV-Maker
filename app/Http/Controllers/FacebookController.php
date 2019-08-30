<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FacebookLogin;
use Socialite;

class FacebookController extends Controller
{
    public function redirectToProvider(){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback(){
        try {
            $user = Socialite::driver('facebook')->user();
            if($user != null){

                $email = $user->getEmail();
                if($email == ""){
                    $email = "null";
                }

                $newUser = new FacebookLogin;
                $newUser->facebook_id = $user->getId();
                $newUser->name = $user->getName();
                $newUser->email = $email;

                $newUser->save();
                return "login success";
            }else{
                return redirect('login');
            }


        } catch (Exception $e) {
            return redirect('login');
        }
    }
}
