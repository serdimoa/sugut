<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\Session\Session;

class PageFirstController extends Controller
{
    public function index(){
        return view('index');
    }
}
