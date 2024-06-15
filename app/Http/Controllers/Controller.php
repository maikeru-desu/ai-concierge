<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;

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

    public function myPage()
    {
        return view('user.pages.my-page');
    }

    public function logs()
    {
        return view('user.pages.logs');
    }

    public function map()
    {
        return view('user.pages.map');
    }

    public function pricing()
    {
        return view('user.pricing');
    }

    public function language()
    {
        return view('user.language');
    }

    public function changeLanguage(string $locale): RedirectResponse
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->route('');
    }
}
