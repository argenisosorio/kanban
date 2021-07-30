<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LIST
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $dashboards = Dashboard::get();
        return view('dashboards.index', compact('dashboards'));
    }
}