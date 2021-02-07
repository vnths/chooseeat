<?php
namespace app\admin\controller;

use app\BaseController;
use app\Request;

class Login extends BaseController
{
    public function index()
    {
        $parms = input();
        dump($parms);

        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}