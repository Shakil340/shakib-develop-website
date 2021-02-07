<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
       $subjects = Subject::get();

        return view('Admin.Contact-us.Subject.manage',compact('subjects'));
    }

    public function create(){
        return view('Admin.Contact-us.Subject.add');
    }

    public function store(Request $req){
        try {

            Subject::create([
            'name'=>$req->name,
            'status'=>$req->status
        ]);
            $this->setSuccessMessage('Subject Add has been Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();
    }

    public function edit($id){
        $subject = Subject::find($id);
        return view('Admin.Contact-us.Subject.edit',compact('subject'));
    }

    public function update(Request $req){
        try {

            Subject::where('id',$req->id)->update([
                'name'=>$req->name,
                'status'=>$req->status
            ]);
            $this->setSuccessMessage('Subject Add has been Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();
    }

    public function delete($id){
        try {
            $subject = Subject::find($id);
            $subject->delete();
            $this->setSuccessMessage('Subject has been Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();
    }
}
