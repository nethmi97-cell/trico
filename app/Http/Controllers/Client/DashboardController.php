<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:superadministrator|administrator|client');
    }

    public function index()
    {
        return view("client.account.index");
    }
}
