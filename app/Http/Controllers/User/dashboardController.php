<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){

            if (Auth::user()){
                return redirect('/');
            }else{
                return view('User.login');
            }


    }

    public function store(Request $req){

        if (Auth::attempt(['email'=>$req->email, 'password'=>$req->password])){
            return redirect('/');
        }

    }

    public function logout(){

            Auth::logout();

        return redirect(route('login.user'));
    }

    public function dashboard(){

        return view('User.dashboard');
    }

    public function userStore(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required_with:password|same:password|min:6'
        ]);
        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>bcrypt($req->password),

        ]);
        return redirect()->back();
    }
}
