<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Ad;
use Carbon\Carbon;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Category = Category::count();
        $Page = Page::count();
        $posts = Post::count();
        
        $current = Carbon::now();
        $today = Post::whereDate('created_at', $current)->count();
        $dt2 = $current->subDay(1);
        $day2 = Post::whereDate('created_at', $dt2)->count();
        
        $dt3 = $current->subDay(2);
        $day3 = Post::whereDate('created_at', $dt3)->count();
        
        $dt4 = $current->subDay(3);
        $day4 = Post::whereDate('created_at', $dt4)->count();

        $dt5 = $current->subDay(4);
        $day5 = Post::whereDate('created_at', $dt5)->count();
        
        $dt6 = $current->subDay(53);
        $day6 = Post::whereDate('created_at', $dt6)->count();

        $dt7 = $current->subDay(6);
        $day7 = Post::whereDate('created_at', $dt7)->count();
       
        $dateformatetoday = Carbon::now()->format('d M ');
        $dateformated2 = Carbon::now()->subDay(1)->format('d M ');
        $dateformated3 = Carbon::now()->subDay(2)->format('d M ');
        $dateformated4 = Carbon::now()->subDay(3)->format('d M ');
        $dateformated5 = Carbon::now()->subDay(4)->format('d M ');
        $dateformated6 = Carbon::now()->subDay(5)->format('d M ');
        $dateformated7 = Carbon::now()->subDay(6)->format('d M ');
        // dd($dt2);
        return view('home',compact('Category','Page','posts','today','day2','day3','day4','day5','day6','day7','dateformatetoday','dateformated2','dateformated3'
        ,'dateformated4','dateformated5','dateformated6','dateformated7'));
    }

    public function homepage()
    {
        $posts = Post::latest()->paginate(10);
        $recentpost = Post::latest()->take(5)->get();
        $category = Category::get();
        $categoryfooter = Category::get();
        $Page = Page::get();
        $setting = Setting::first();
        $ads = Ad::first();
        $categoryfooter = Category::get();
        // dd($recentpost);
        return view('welcome',compact('posts','recentpost','category','categoryfooter','Page','setting','ads','categoryfooter'));
    }

    public function out()
    {
        Auth::logout();
        return redirect('/');
    }
}
