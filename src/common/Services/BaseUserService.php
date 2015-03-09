<?php


namespace Common\Services;


use Illuminate\Support\Facades\Hash;

abstract class BaseUserService {

    protected $formData;
    public $error;
    protected $user;

    protected function hashPassword(){
        $this->formData['password'] = Hash::make($this->formData['password']);
    }


    protected function passwordIsValid($hashed = true){

        if($hashed){
            if ( ! Hash::check($this->formData['password'], $this->user->password))
            {
                $this->error = 'forkert kodeord';
                return false;
            }
        }else
        {
            if ( $this->formData['password'] != $this->user->password)
            {
                $this->error = 'forkert kodeord';
                return false;
            }
        }


        return true;

    }

    protected function userExist($user){

        if($user == null){
            $this->error = 'Der findes ingen bruger med det brugernavn';
            return false;
        }

        $this->user = $user;
        return true;
    }

    protected function setUser(){
        $this->formData['id'] = $this->user->getCurrent()->id;
    }

} 