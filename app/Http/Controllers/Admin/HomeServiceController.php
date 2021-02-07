<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeService;
use Illuminate\Http\Request;

class HomeServiceController extends Controller
{
    public function index(){
        $homeServices = HomeService::where('status',1)->get();
        return view('Admin.HomeService.manage',compact('homeServices'));
    }
}
