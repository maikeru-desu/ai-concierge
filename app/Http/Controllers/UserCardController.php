<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserCardController extends Controller
{
    public function payment(): View
    {
        $userSession = session()->get('user_session');
        $plan = Plan::where('id', $userSession['plan_id'])->first();

        return view('user.payment', compact('plan'));
    }
}
