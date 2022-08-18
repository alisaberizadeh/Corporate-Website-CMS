<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Comment;
use App\Models\Setting;
use App\Models\en_Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class commentsController extends Controller
{
    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $comments = Comment::orderBy('id','DESC')->get();
        $en_comments = en_Comment::orderBy('id','DESC')->get();
        return view('wp.comments',['en'=>$en->value,'comments'=>$comments,'en_comments'=>$en_comments]);
    }
    public function active($id)
    {
       Comment::find($id)->update([
            'status'=>'1'
       ]);
       
       alert()->Success('', 'فعال شد')->persistent('باشه');
       return redirect()->back();
    }
    public function Noactive($id)
    {
       Comment::find($id)->update([
            'status'=>'0'
       ]);
       
       alert()->Success('', 'غیر فعال شد')->persistent('باشه');
       return redirect()->back();
    }
    public function en_active($id)
    {
        en_Comment::find($id)->update([
            'status'=>'1'
       ]);
       
       alert()->Success('', 'فعال شد')->persistent('باشه');
       return redirect()->back();
    }
    public function en_Noactive($id)
    {
        en_Comment::find($id)->update([
            'status'=>'0'
       ]);
       
       alert()->Success('', 'غیر فعال شد')->persistent('باشه');
       return redirect()->back();
    }
}
