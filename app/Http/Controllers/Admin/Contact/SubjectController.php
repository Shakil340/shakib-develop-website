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
}
