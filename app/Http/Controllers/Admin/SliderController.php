<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Image;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::get();
        return view('Admin.Slider.Manage',compact('sliders'));
    }

    public function create(){
        return view('Admin.Slider.add');
    }

    public function store(Request $req){

        try {
            $req->validate([
                'img1'=>'required',
                'img2'=>'required',
                'img3'=>'required',
                'img4'=>'required',
                'img5'=>'required',
                'status'=>'required'
            ]);
            $file = $req->file('img1');
            $file_ex= $file->getClientOriginalExtension();
            $file_name = rand(1,100).rand(1000,2000).'.'.$file_ex;
            Image::make($file)->resize(268, 249)->save(public_path('uploads/image/'.$file_name));

            $file2 = $req->file('img2');
            $file_ex2= $file2->getClientOriginalExtension();
            $file_name2 = rand(1,100).rand(1000,2000).'.'.$file_ex2;
            Image::make($file2)->resize(268, 249)->save(public_path('uploads/image/'.$file_name2));

            $file3 = $req->file('img3');
            $file_ex3= $file3->getClientOriginalExtension();
            $file_name3 = rand(1,100).rand(1000,2000).'.'.$file_ex3;
            Image::make($file3)->resize(268, 249)->save(public_path('uploads/image/'.$file_name3));

            $file4 = $req->file('img4');
            $file_ex4= $file4->getClientOriginalExtension();
            $file_name4 = rand(1,100).rand(1000,2000).'.'.$file_ex4;
            Image::make($file4)->resize(268, 249)->save(public_path('uploads/image/'.$file_name4));

            $file5 = $req->file('img5');
            $file_ex5= $file5->getClientOriginalExtension();
            $file_name5 = rand(1,100).rand(1000,2000).'.'.$file_ex5;
            Image::make($file5)->resize(268, 249)->save(public_path('uploads/image/'.$file_name5));
            Slider::insert([
                'img1'=>$req->$file_name,
                'img2'=>$req->$file_name2,
                'img3'=>$req->$file_name3,
                'img4'=>$req->$file_name4,
                'img5'=>$req->$file_name5,
                'status'=>$req->status,
            ]);

            $this->setSuccessMessage('Slider Image has been Successfully!');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }


        return redirect()->back();
    }
}
