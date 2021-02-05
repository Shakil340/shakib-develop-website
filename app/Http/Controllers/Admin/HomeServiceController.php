<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeServiec;
use Illuminate\Http\Request;

class HomeServiceController extends Controller
{
    public function index(){
        $homeServices = HomeServiec::where('status',1)->get();
        return view('Admin.HomeService.manage',compact('homeServices'));
    }
}
