<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/login');
    }
}
