<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Social_Media;

class socialController extends Controller
{
    public function index()
    {
       $social = Social_Media::all();
       return view('wp.social',['social'=>$social]);
    }
    public function update(Request $request)
    {
        Social_Media::where('name','instagram')->first()->update(['value'=>$request->instagram]);
        Social_Media::where('name','telegram')->first()->update(['value'=>$request->telegram]);
        Social_Media::where('name','whatsapp')->first()->update(['value'=>$request->whatsapp]);
        Social_Media::where('name','twitter')->first()->update(['value'=>$request->twitter]);
        Social_Media::where('name','facebook')->first()->update(['value'=>$request->facebook]);
        Social_Media::where('name','linkedin')->first()->update(['value'=>$request->linkedin]);
        Social_Media::where('name','github')->first()->update(['value'=>$request->github]);

        alert()->Success('', 'شبکه های اجتماعی بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function show($id)
    {
        Social_Media::where('id',$id)->first()->update(['status'=>'1']);
        alert()->Success('', 'به نمایش درآمد')->persistent('باشه');
        return redirect()->back();
        
    }
    public function hide($id)
    {
        Social_Media::where('id',$id)->first()->update(['status'=>'0']);
        alert()->Success('', 'مخفی شد')->persistent('باشه');
        return redirect()->back();
        
    }
}
