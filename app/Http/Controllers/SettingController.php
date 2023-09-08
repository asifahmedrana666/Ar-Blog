<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
class SettingController extends Controller
{
    public function setting()
    {
        $setting = Setting::first();
        // dd($post);

        return view('setting',compact('setting'));

    }

    public function setting_post(Request $request,$id)
    {
        // dd($request);
        $setting             = Setting::find($id);
        // dd($setting);
        $setting->title  = $request->title;
        $setting->description  = $request->description;
        $setting->keywords  = $request->keywords;
        $setting->footertext  = $request->footertext;
        if($request->logo){
            $imageName = time().'.'.$request->logo->extension();
            $move = $request->logo->move(public_path('mylogo'), $imageName);
            // dd($imageName );
            $setting->logo  = $imageName;
        }
        $setting->save();
        return redirect('setting')->with('success','Setting Update Successfully');
    }
}
