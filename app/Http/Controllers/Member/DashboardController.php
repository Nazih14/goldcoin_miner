<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     /**
    * Show Dashboard Admin.
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        return view('admin.layouts.base');
    }
}
