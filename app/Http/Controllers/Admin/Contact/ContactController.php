<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::get();
        return view('Admin.Contact-Us.manage',compact('contacts'));
    }

    public function store(Request $req){

        Contact::create([
           'user_id'=>Auth::id(),
           'subject_id'=>$req->subject_id,
           'name'=>$req->name,
           'email'=>$req->email,
           'message'=>$req->message
        ]);

        return redirect()->back();
    }

}
