<?php

namespace Common\Traits;

use Illuminate\Support\Facades\Auth;

trait UserSession {

    public static function setCurrent($user){
        Auth::login($user);
    }

    public static function getCurrent(){
        if (Auth::user()){
            return Auth::user();
        }
        return null;
    }

    public static function logout(){
        Auth::logout();
    }
}
