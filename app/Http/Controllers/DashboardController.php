<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\User;
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
        $users = User::all();
        return view('dashboards.create')->with('users', $users);
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

    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */
    public function edit(Dashboard $dashboard)
    {
        $users = User::all();
        return view('dashboards.edit', compact('dashboard'))->with('users', $users);;
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, Dashboard $dashboard)
    {
        $request->validate([
            'title' => 'required',
            'owner' => 'required',
        ]);
        $dashboard->update($request->all());

        return redirect()->route('dashboards.index')->with('success', 'Dashboard updated successfully');
    }
}
