<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //View Admin Dashboard
    public function index() {
        return view('dashboard.index');
    }
}

//cc BTC-alt  Bitcoin icon
