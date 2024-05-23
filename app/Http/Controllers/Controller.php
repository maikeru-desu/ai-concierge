<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function payment()
    {
        return view('user.payment');
    }

    public function dashboard()
    {
        return view('user.pages.dashboard');
    }

    public function info()
    {
        return view('user.pages.info');
    }
}
