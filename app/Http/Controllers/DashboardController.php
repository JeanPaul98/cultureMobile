<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        return view('dashboard.dashboard');
    }

    public function showAgender()
    {
        return view('dashboard.agender');
    }
}
