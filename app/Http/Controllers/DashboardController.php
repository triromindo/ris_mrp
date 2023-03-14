<?php

namespace App\Http\Controllers;

use App\Models\sys\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->role_id == Role::admin) {
            return view('dashboard.admin');
        } else {
            return view('dashboard.user');
        }
    }
}
