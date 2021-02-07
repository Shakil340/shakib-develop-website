<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('Admin.Category.manage',compact('categories'));
    }

    public function edit($id){
       $category =  Category::find($id);
       return view('Admin.Category.edit',compact('category'));
    }

    public function delete($id){
       $category =  Category::find($id);
       $category->delete();
       return redirect()->back();

    }
    public function create(){
        return view('Admin.Category.add');
    }

    public function store(Request $req){
        try {
            Category::create([
                'name'=>$req->name,
                'status'=>$req->status
            ]);
            $this->setSuccessMessage('Category has been Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();
    }

    public function update(Request $req){
        try {
            Category::where('id',$req->id)->update([
                'name'=>$req->name,
                'status'=>$req->status
            ]);
            $this->setSuccessMessage('Category has been Update Successfully !');
        }catch (\Exception $e){
            $this->setErrorMessage($e->getMessage());
        }

        return redirect()->back();
    }


}
