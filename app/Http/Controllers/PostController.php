<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Page;
use App\Models\Author;
use App\Models\Setting;
use App\Models\Ad;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
class PostController extends Controller
{
    public function post()
    {
        $posts = Post::paginate(10);
        // dd($post);

        return view('post',compact('posts'));

    }
    public function add_post()
    {
        $Category = Category::get();

        return view('add_post',compact('Category'));

    }

    public function add_post_post(Request $request)
    {
        
        $post             = new Post;
        $post->title  = $request->title;
        $post->body  = $request->body;
        $post->slug  = Str::slug($request->slug);
        $post->category  = $request->category;
        if($request->featuredimage){
            $imageName = time().'.'.$request->featuredimage->extension();
            $move = $request->featuredimage->move(public_path('pic'), $imageName);
           
        }
        $post->featuredimage  = $imageName;
        $post->save();  
        return redirect('post')->with('success','Post Successfully');
       

    }

    public function upload(Request $request): JsonResponse
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
      
            $request->file('upload')->move(public_path('media'), $fileName);
      
            $url = asset('media/' . $fileName);
  
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
    


    public function view($slug)
    {
        $view = Post::where('slug', $slug)->get();
        $viewtitle = Post::where('slug', $slug)->get();
        $viewcategory = Post::where('slug', $slug)->get();
        // dd($view);
        $postsugest = Post::latest()->take(2)->get();
        // $recentpost = Post::latest()->take(5)->get();
        $ads = Ad::first();
        $recentpost = Post::latest()->take(5)->get();
        $category = Category::get();
        $categoryfooter = Category::get();
        $Page = Page::get();
        $setting = Setting::first();
        $author = Author::first();
        
        return view('post_view', compact('view','postsugest','ads','setting','category','viewtitle','viewcategory','recentpost','author','categoryfooter','Page'));

    }

    public function categoryslug($slug)
    {
        $views = Post::where('category', $slug)->paginate(10);
        $viewtitle = Post::where('category', $slug)->first();
        $viewcategory = Post::where('slug', $slug)->get();
        // dd($view);
        $postsugest = Post::latest()->take(2)->get();
        // $recentpost = Post::latest()->take(5)->get();
        $ads = Ad::first();
        $recentpost = Post::latest()->take(5)->get();
        $category = Category::get();
        $categoryfooter = Category::get();
        $Page = Page::get();
        $setting = Setting::first();
        $author = Author::first();
        $post = Post::get();
        return view('categoryslug', compact('views','postsugest','ads','setting','category','viewtitle','viewcategory','recentpost','author','post','categoryfooter','Page'));

    }

    public function pageslug($slug)
    {
        $view = Page::where('slug', $slug)->get();
        $viewtitle = Page::where('slug', $slug)->first();
        $viewcategory = Post::where('slug', $slug)->get();
        // dd($view);
        $postsugest = Post::latest()->take(2)->get();
        // $recentpost = Post::latest()->take(5)->get();
        $ads = Ad::first();
        $recentpost = Post::latest()->take(5)->get();
        $category = Category::get();
        $categoryfooter = Category::get();
        $Page = Page::get();
        $setting = Setting::first();
        $author = Author::first();
        $post = Post::get();
        return view('pageslug', compact('view','postsugest','ads','setting','category','viewtitle','viewcategory','recentpost','author','post','categoryfooter','Page'));

    }

    public function edit_post($id)
    {
        $post = Post::find($id);
        $Category = Category::get();
        return view('edit_post', compact('post','Category'));

    }

    public function edit_post_post(Request $request,$id)
    {
        // dd($request);

        $post             = Post::find($id);
        $post->title  = $request->title;
        $post->body  = $request->body;
        $post->slug  = Str::slug($request->slug);
        $post->category  = $request->category;
        if($request->featuredimage){
            $imageName = time().'.'.$request->featuredimage->extension();
            $move = $request->featuredimage->move(public_path('pic'), $imageName);
            // dd($imageName );
            $post->featuredimage  = $imageName;
        }
        
        $post->save();    
        return redirect('post')->with('success','Edit Successfully');

    }

    public function delete_post($id)
    {
        $Post = Post::find($id);
        $Post->delete();

        return redirect('post')->with('success','Detele Successfully');
    }
}
