<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Footer_Information;
use App\Http\Controllers\Controller;
use App\Models\en_footer__information;

class footerController extends Controller
{
    public function index()
    {
        $Footer_Information = Footer_Information::where('id','1')->first();
        $en_Footer_Information = en_footer__information::where('id','1')->first();
        $en = Setting::where('name', 'english')->first('value');
        return view('wp.footer', [
            'Footer_Information' => $Footer_Information,
            'en_Footer_Information' => $en_Footer_Information,
            'en'=>$en->value,

        ]);
    }
    public function update(Request $request)
    {
        Footer_Information::where('id','1')->first()->update([
            'text'=>$request->text,
            'copy_text'=>$request->copy_text,
            'count_post'=>$request->count_post,
        ]);
        
        alert()->Success('', 'اطلاعات فوتر بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }
}
