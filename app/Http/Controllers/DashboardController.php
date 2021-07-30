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

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        return view('dashboards.create');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'owner' => 'required',
            'title' => 'required',
        ]);

        Dashboard::create($request->all());
        return redirect()->route('dashboards.index')->with('success', 'Dashboard created successfully.');
    }
}