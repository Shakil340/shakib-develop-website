<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index(){
        $experts = Expert::get();
        return view('Admin.Expert-Work.manage',compact('experts'));
    }

    public function create(){

        return view('Admin.Expert-Work.add');
    }

    public function store(Request $req){

        try {


            Expert::create([
                'title'=>$req->title,
                'subTitle'=>$req->subTitle,
                'status'=>$req->status
            ]);

            $this->setSuccessMessage('Expert Post has been Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();
    }
}
