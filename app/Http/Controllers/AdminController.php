<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    public function index(){
        if (session('adminAuth')){
            return redirect('dashboard');
        }
        else{
            return view('admin.index');
        }
    }

    public function store(Request $request,Admin $adminModel){
        if ($request->session()->get('_token') === $request->input('_token')){
            $isAuth = $adminModel->adminAuth($request->input('login'),$request->input('password'));
            if ($isAuth) {
                session(['adminAuth' => $request->session()->get('_token')]);
                return redirect('dashboard');
            }
            else{
                return redirect('admin');
            }
        }
        else{
            abort(404);
        }
    }

    public function logout(){
        session()->forget('adminAuth');
        return redirect('admin');
    }
}
