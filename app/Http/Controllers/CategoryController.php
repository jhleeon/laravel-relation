<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{

    public function index(){
        $categories = Category::all();
        return view('otm.category.index',['categories'=>$categories]);
    }
    
    public function create(){
        return view('otm.category.create');
    }

    public function store(Request $request){
        Category::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
        ]);
        return redirect(route('categories.index'))->with('message', 'successfylly created');
    }

    public function edit($id){
        $category = Category::where('id',$id)->first();
        return view('otm.category.edit',['category'=>$category]);
    }


    public function update(Request $request, $id){
        $category = Category::where('id',$id)->first();
        $category->update([
            'name'=>$request->name,
            // 'slug'=>Str::slug($request->name),
        ]);
        return redirect(route('categories.index'))->with('message', 'successfylly updated');
    }

    public function delete($id){
        $category = Category::where('id',$id)->first();
        $category->delete();
        return redirect(route('categories.index'))->with('message', 'successfylly Deleted');

        
    }
}

