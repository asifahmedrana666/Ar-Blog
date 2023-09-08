<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;
class PageController extends Controller
{
    public function page()
    {
        $page = Page::get();
        // dd($post);

        return view('page',compact('page'));

    }

    public function add_page()
    {
       
        return view('add_page');
    }

    public function add_page_post(Request $request)
    {
        // dd($request);
        $page             = new Page;
        $page->name  = $request->name;
        $page->slug  = Str::slug($request->slug);
        $page->body  = $request->body;
        $page->save();    
        return redirect('page')->with('success','Page Create Successfully');
    }

    public function edit_page($id)
    {
        $page = Page::find($id);

        return view('edit_page',compact('page'));
    }

    public function edit_page_post(Request $request,$id)
    {
        // dd($request->body);
        $Page             = Page::find($id);
        $Page->name  = $request->name;
        $Page->slug  = Str::slug($request->slug);
        $Page->body  = $request->body;
        $Page->save();
        return redirect('page')->with('success','Update Successfully');
    }

    public function delete_page($id)
    {
        $Page = Page::find($id);
        $Page->delete();

        return redirect('page')->with('success','Delete Successfully');
    }
}
