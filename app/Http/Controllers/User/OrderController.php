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
}
