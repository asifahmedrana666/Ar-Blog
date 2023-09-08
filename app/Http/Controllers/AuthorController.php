<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
class AuthorController extends Controller
{
    public function author()
    {
        $author = Author::first();
        // dd($post);

        return view('author',compact('author'));

    }

    public function author_post(Request $request,$id)
    {
        // dd($request);
        $author             = author::find($id);
        // dd($setting);
        $author->name  = $request->name;
        $author->about_me  = $request->about_me;
        $author->fb  = $request->fb;
        $author->twitter  = $request->twitter;
        $author->instagram  = $request->instagram;
        if($request->pic){
            $imageName = time().'.'.$request->pic->extension();
            $move = $request->pic->move(public_path('mylogo'), $imageName);
            // dd($imageName );
            $author->pic  = $imageName;
        }
        $author->save();
        return redirect('author')->with('success','Author Update Successfully');
    }
}
