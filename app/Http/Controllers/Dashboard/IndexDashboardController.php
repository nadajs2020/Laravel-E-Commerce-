<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.indxe');
    }

    public function doLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
