<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){
        if (Auth::check()){
            return view('User.dashboard');
        }else{
            return redirect(route('login'));
        }

    }

    public function logout(){
        if (Auth::check()){
            Auth::logout();
        }

        return redirect(route('login'));
    }
}
