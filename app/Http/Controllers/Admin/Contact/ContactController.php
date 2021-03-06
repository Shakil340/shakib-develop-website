<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::with('subject')->get();
        return view('Admin.Contact-Us.manage',compact('contacts'));
    }

    public function store(Request $req){

        try {
            if (Auth::check()){
                $contacts = Contact::where('user_id',Auth::id())
                    ->first();

            }else{

                $contacts=Contact::where('ip_address',request()->ip())
                    ->first();
            }


            $contacts =  Contact::create([
                'user_id'=>Auth::id(),
                'ip_address'=>$req->ip(),
                'subject_id'=>$req->subject_id,
                'name'=>$req->name,
                'email'=>$req->email,
                'message'=>$req->message
            ]);

            $this->setSuccessMessage('Submit Successfully');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();
    }

}
