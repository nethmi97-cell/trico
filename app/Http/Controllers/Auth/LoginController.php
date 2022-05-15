<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function redirectTo() {

        $user = Auth::user();

        if ($user->hasRole('superadministrator')) {
            return '/superadministrator/dashboard';
        } else if ($user->hasRole('administrator')) {
            return '/administrator/dashboard';
        } else if ($user->hasRole('client')) {
            return 'account/overview';
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
