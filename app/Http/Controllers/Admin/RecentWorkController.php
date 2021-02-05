<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RecentWork;
use Illuminate\Http\Request;

class RecentWorkController extends Controller
{
    public function index(){
       $recents = RecentWork::get();
        return view('Admin.Recent-Work.manage',compact('recents'));
    }

    public function create(){

        return view('Admin.Recent-Work.add');
    }

    public function store(Request $req){

        try {
            if ($req->has('thumbnail')){
                $file = $req->file('thumbnail');
                $file_ex= $file->getClientOriginalExtension();
                $file_name = rand(1,100).rand(1000,2000).'.'.$file_ex;
                $file->move(public_path('uploads/image/'),$file_name);
            }

            RecentWork::create([
                'title'=>$req->title,
                'thumbnail'=>$file_name,
                'status'=>$req->status
            ]);

            $this->setSuccessMessage('Recent Post has been Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();
    }
}
