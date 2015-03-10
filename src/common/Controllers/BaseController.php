<?php namespace Common\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BaseController extends \Illuminate\Routing\Controller
{
    use DispatchesCommands, ValidatesRequests;

    protected $viewBag;

    function __construct()
    {
        $this->viewBag = [];
    }


}
