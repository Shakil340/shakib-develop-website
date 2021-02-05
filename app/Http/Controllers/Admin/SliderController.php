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

            $file5 = $req->file('img5');
            $file_ex5= $file5->getClientOriginalExtension();
            $file_name5 = rand(1,100).rand(1000,2000).'.'.$file_ex5;
            $file5->move(public_path('uploads/image/'),$file_name5);
            Slider::insert([
                'img1'=>$file_name,
                'img2'=>$file_name2,
                'img3'=>$file_name3,
                'img4'=>$file_name4,
                'img5'=>$file_name5,
                'status'=>$req->status,
            ]);

            $this->setSuccessMessage('Slider Image has been Successfully!');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }


        return redirect()->back();
    }

    public function edit($id){
       $sliders = Slider::find($id);
        return view('Admin.Slider.edit',compact('sliders'));
    }

    public function update(Request $req){
        $sliders = Slider::find($req->id);




        try {
            $sliders = Slider::find($req->id);
            $img1 = $req->img1;
            $img2 = $req->img2;
            $img3 = $req->img3;
            $img4 = $req->img4;
            $img5 = $req->img5;

            if ($img1 && $img2 && $img3 && $img4 && $img5){
                unlink(public_path('uploads/image/').$sliders->img1);
                unlink(public_path('uploads/image/').$sliders->img2);
                unlink(public_path('uploads/image/').$sliders->img3);
                unlink(public_path('uploads/image/').$sliders->img4);
                unlink(public_path('uploads/image/').$sliders->img5);

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

                $file5 = $req->file('img5');
                $file_ex5= $file5->getClientOriginalExtension();
                $file_name5 = rand(1,100).rand(1000,2000).'.'.$file_ex5;
                $file5->move(public_path('uploads/image/'),$file_name5);

                $sliders->img1=$file_name;
                $sliders->img2=$file_name2;
                $sliders->img3=$file_name3;
                $sliders->img4=$file_name4;
                $sliders->img5=$file_name5;
            }
            $sliders->status = $req->status;
            $sliders->save();

            $this->setSuccessMessage('Slider has been Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();




    }
}
