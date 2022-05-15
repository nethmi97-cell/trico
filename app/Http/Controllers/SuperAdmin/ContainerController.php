<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContainerController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index()
    {
        return view("superadmin.container.index");
    }

    public function create()
    {
        return view("superadmin.container.create");
    }
}
