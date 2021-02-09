<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhotoResizing;
use Illuminate\Http\Request;

class PhotoResizingController extends Controller
{
    public function index(){
        $photos =  PhotoResizing::get();
        return view('Admin.Portfolio.Photo-Resizing.manage',compact('photos'));
    }


    public function create(){
        return view('Admin.Portfolio.Photo-Resizing.add');
    }

    public function store(Request $req){

        try {
            $req->validate([
                'img1'=>'required',
                'img2'=>'required',
                'img3'=>'required',
                'img4'=>'required',
                'status'=>'required'
            ]);
            $file = $req->file('img1');
            $file_ex= $file->getClientOriginalExtension();
            $file_name = rand(1,100).rand(1000,2000).'.'.$file_ex;
            $file->move(public_path('uploads/image/'),$file_name);


            $file2 = $req->file('img2');
            $file_ex2= $file2->getClientOriginalExtension();
            $file_name2 = rand(1,100).rand(1000,2000).'.'.$file_ex2;
            $file2->move(public_path('uploads/image/'),$file_name2);

            $file3 = $req->file('img3');
            $file_ex3= $file3->getClientOriginalExtension();
            $file_name3 = rand(1,100).rand(1000,2000).'.'.$file_ex3;
            $file3->move(public_path('uploads/image/'),$file_name3);

            $file4 = $req->file('img4');
            $file_ex4= $file4->getClientOriginalExtension();
            $file_name4 = rand(1,100).rand(1000,2000).'.'.$file_ex4;
            $file4->move(public_path('uploads/image/'),$file_name4);


            PhotoResizing::insert([
                'img1'=>$file_name,
                'img2'=>$file_name2,
                'img3'=>$file_name3,
                'img4'=>$file_name4,
                'status'=>$req->status,
            ]);

            $this->setSuccessMessage('Photo Resizing Image has been Successfully!');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }


        return redirect()->back();
    }

    public function edit($id){
        $photos = PhotoResizing::find($id);
        return view('Admin.Portfolio.Photo-Resizing.edit',compact('photos'));
    }

    public function update(Request $req){
        $photos = PhotoResizing::find($req->id);




        try {
            $photos = PhotoResizing::find($req->id);
            $img1 = $req->img1;
            $img2 = $req->img2;
            $img3 = $req->img3;
            $img4 = $req->img4;


            if ($img1 && $img2 && $img3 && $img4 ){
                unlink(public_path('uploads/image/').$photos->img1);
                unlink(public_path('uploads/image/').$photos->img2);
                unlink(public_path('uploads/image/').$photos->img3);
                unlink(public_path('uploads/image/').$photos->img4);


                $file = $req->file('img1');
                $file_ex= $file->getClientOriginalExtension();
                $file_name = rand(1,100).rand(1000,2000).'.'.$file_ex;
                $file->move(public_path('uploads/image/'),$file_name);


                $file2 = $req->file('img2');
                $file_ex2= $file2->getClientOriginalExtension();
                $file_name2 = rand(1,100).rand(1000,2000).'.'.$file_ex2;
                $file2->move(public_path('uploads/image/'),$file_name2);

                $file3 = $req->file('img3');
                $file_ex3= $file3->getClientOriginalExtension();
                $file_name3 = rand(1,100).rand(1000,2000).'.'.$file_ex3;
                $file3->move(public_path('uploads/image/'),$file_name3);

                $file4 = $req->file('img4');
                $file_ex4= $file4->getClientOriginalExtension();
                $file_name4 = rand(1,100).rand(1000,2000).'.'.$file_ex4;
                $file4->move(public_path('uploads/image/'),$file_name4);



                $photos->img1=$file_name;
                $photos->img2=$file_name2;
                $photos->img3=$file_name3;
                $photos->img4=$file_name4;

            }
            $photos->status = $req->status;
            $photos->save();

            $this->setSuccessMessage('Photo Resizing has been Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();




    }
}
