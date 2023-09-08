<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function category()
    {
        $category = Category::get();
        return view('category',compact('category'));
    }


    public function add_category()
    {
       
        return view('add_category');
    }

    public function add_category_post(Request $request){
        // dd($request);
        $category             = new Category;
        $category->name  = $request->name;
        $category->slug  = Str::slug($request->slug);
        $category->save();    
        return redirect('category')->with('success','Category Create Successfully');
    }

    public function edit_category($id)
    {
        $category = Category::find($id);

        return view('edit_category',compact('category'));
    }

    public function edit_category_post(Request $request,$id){
        // dd($request);
        $category             = Category::find($id);
        $category->name  = $request->name;
        $category->slug  = Str::slug($request->slug);
        $category->save();
        return redirect('category')->with('success','Category Edit Successfully');
    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('category')->with('success','Delete Successfully');
    }
}