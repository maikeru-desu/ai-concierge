<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(): View
    {
        $plans = Plan::all();

        return view('user.pricing', compact('plans'));
    }

    public function choosePlan(Plan $plan)
    {
        $userSession = session()->get('user_session');
        $userSession['plan_id'] = $plan->id;
        session()->put('user_session', $userSession);

        return redirect()->route('card.payment');
    }

    public function checkout()
    {
        // setApiKey
    }
}
