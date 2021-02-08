<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FreeTrial;
use Faker\Provider\File;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Image;
class FreeTrialController extends Controller

{

    public function index(){
        $free_trials = FreeTrial::with('Category')->get();
        return view('Admin.Free-Trial.manage',compact('free_trials'));
    }
    public function store(Request $req){


        try {

        if ($req->hasFile('thumbnail')) {


            $file = $req->file('thumbnail');
            $file_ex = $file->getClientOriginalExtension();
            $file_name = rand(1, 100) . rand(1000, 2000) . '.' . $file_ex;
            $file->move(public_path('uploads/image/'), $file_name);

        }


        $req->validate([
           'number'=>' numeric'
        ]);

           FreeTrial::create([
                'user_id'=>Auth::id(),
                'name'=>$req->name,
                'email'=>$req->email,
                'location'=>$req->location,
                'number'=>$req->number,
                'thumbnail'=>$file_name,
                'message'=>$req->message,
                'category_id'=>$req->category_id
            ]);

            $this->setSuccessMessage('image uploads successfully!');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();
    }


    public function single($id){
        $singles = FreeTrial::where('id',$id)->get();
        return view('Admin.Free-Trial.single',compact('singles'));
    }

    public function download($id){

        $downloads = FreeTrial::find($id);

        $filepath = public_path('uploads/image/'.$id);

            return response()->download($filepath);

    }
}
