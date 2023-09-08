<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
class AdController extends Controller
{
    public function ads()
    {
        $ads = Ad::first();
        // dd($post);

        return view('ads',compact('ads'));

    }
}
