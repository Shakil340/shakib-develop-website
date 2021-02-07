<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Protfolliow;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
       $protfolliows =  Protfolliow::where('status',1)->get();
        return view('Admin.Protfolliow.manage',compact('protfolliows'));
    }
}
