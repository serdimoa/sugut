<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        if (session('adminAuth')){
            return view('admin.dashboard');
        }
        else{
            return view('admin.index');
        }
    }
}
