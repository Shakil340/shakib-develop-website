<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeServiceSubTitle;
use Illuminate\Http\Request;

class HomeServiceSubTitleController extends Controller
{
    public function index(){
        return HomeServiceSubTitle::with('shakil')->get();
    }
    public function create(){
        return view('Admin.Home-Service-Sub.add');
}

    public function store(Request $req){
        try {
            HomeServiceSubTitle::create([
                'home_services_id'=>$req->home_services_id,
                'name'=>$req->name,
                'status'=>$req->status
            ]);

            $this->setSuccessMessage('Home Service Sub Title has been Create Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();

    }
}
