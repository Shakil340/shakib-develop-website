<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $req){

        try {
            if($req->thumbnail){
                $file = $req->file('thumbnail');
                $file_ex =$file->getClientOriginalExtension();
                $file_name=rand(1,100).date('y,d,m').'.'.$file_ex;
                $file->move(public_path('uploads/image/'),$file_name);
            }

            order::create([
                'user_id'=>Auth::id(),
                'service_id'=>$req->service_id,
                'time'=>$req->time,
                'amount'=>$req->amount,
                'description'=>$req->description,
                'status'=>'0',
                'thumbnail'=>$file_name
            ]);
            $this->setSuccessMessage('Order has been Create Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage('Order Create unsuccessfully !');
        }



        return redirect()->back();
    }

    public function pending(){
        $pending = order::with('service')->where('status',0)->where('user_id',Auth::id())->get();
        return view('User.Orders.pending',compact('pending'));

    }

    public function complete(){
        $complete = order::with('service')->where('status',1)->where('user_id',Auth::id())->get();
        return view('User.Orders.complete',compact('complete'));
    }

    public function all(){
        $all = order::with('service')->where('user_id',Auth::id())->get();
        return view('User.Orders.all',compact('all'));
    }

    public function allSoftDelete($id){
       $soft =  order::find($id);
       $soft->delete();
       return redirect()->back();
    }

    public function allSoftDeletePending($id){
       $soft =  order::find($id);
       $soft->delete();
       return redirect()->back();
    }


    //Admin Dashboard Order Show All
    public function adminAll(){
        $orders = order::with('user')->withTrashed()->get();
        return view('Admin.Orders.all',compact('orders'));
    }

    public function edit($id){
        $order = order::withTrashed()->find($id);
        return view('Admin.Orders.edit',compact('order'));
    }

    public function update(Request $req){
        try {
            order::where('id',$req->id)->update([
                'status'=>$req->status
            ]);
            $this->setSuccessMessage('Order has been Update Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }
        return redirect()->back();
    }

    public function single($id){
        $orders = order::withTrashed()->where('id',$id)->get();
        return view('Admin.Orders.Single',compact('orders'));
    }

    public function download($id){

        $downloads = order::find($id);

        $filepath = public_path('uploads/image/'.$id);

        return response()->download($filepath);

    }
}
