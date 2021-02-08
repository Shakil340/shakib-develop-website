<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = service::get();
        return view('Admin.Service.manage',compact('services'));
    }


    public function edit($id){
        $service = service::find($id);
        return view('Admin.Service.edit',compact('service'));
    }

    public function update(Request $req){
        try {
            service::where('id',$req->id)->update([
                'name'=>$req->name,
                'status'=>$req->status
            ]);
            $this->setSuccessMessage('Service has been Update Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();
    }

    public function delete($id){
        $service = service::find($id);
        $service->delete();
        return redirect()->back();
    }
}
