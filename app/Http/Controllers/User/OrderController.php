<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $req){

        $file = $req->file('thumbnail');
        $file_ex =$file->getClientOriginalExtension();
        $file_name=rand(1,100).date('y,d,m').'.'.$file_ex;
        $file->move(public_path('uploads/image/'),$file_name);
        order::create([
            'user_id'=>Auth::id(),
            'service_id'=>$req->service_id,
            'time'=>$req->time,
            'amount'=>$req->amount,
            'description'=>$req->description,
            'status'=>'0',
            'thumbnail'=>$file_name
        ]);

        return redirect()->back();
    }

    public function pending(){
        $pending = order::with('service')->where('status',0)->get();
        return view('User.Orders.pending',compact('pending'));

    }

    public function complete(){
        $complete = order::with('service')->where('status',1)->get();
        return view('User.Orders.complete',compact('complete'));
    }

    public function all(){
        $all = order::with('service')->get();
        return view('User.Orders.all',compact('all'));
    }
}
