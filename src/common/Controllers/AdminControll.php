<?php


namespace Common\Controllers;

use App\Http\Middleware\AdminAuth;

class AdminController extends BaseController {

    function  __construct()
    {
        parent::__construct();
        $this->middleware('auth.admin');
    }

}