<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeService;
use Illuminate\Http\Request;

class HomeServiceController extends Controller
{
    // public function index(){
    //     $homeServices = HomeService::where('status',1)->get();
    //     return view('Admin.HomeService.manage',compact('homeServices'));
    // }

    public function search (Request $req){
        $search = $req->search;
        $homeServices = HomeService::orWhere('title','like','%'.$search.'%')
        ->orWhere('content','like','%'.$search.'%')
        ->orderby('id','desc')->get();
        return view('Admin.HomeService.manage',compact('homeServices','search'));
    }
}
