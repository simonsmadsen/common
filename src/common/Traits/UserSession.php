<?php

namespace Common\Traits;

use Illuminate\Support\Facades\Session;

trait UserSession {

    public static function setCurrent($id){
        Session::put('currentUser',$id);
    }

    public static function getCurrent(){
        if(Session::has('currentUser')){
            return User::find(Session::get('currentUser'));
        }
        return null;
    }

    public static function logout(){
        if(Session::has('currentUser')){
            Session::forget('currentUser');
        }
    }

}
