<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsigneeController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index()
    {
        return view("superadmin.consignee.index");
    }
}
