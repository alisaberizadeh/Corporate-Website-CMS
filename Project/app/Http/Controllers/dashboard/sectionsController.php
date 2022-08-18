<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class sectionsController extends Controller
{
    public function index()
    {
        $sections = Section::where('type','section')->get();
        return view('wp.sections',['sections'=>$sections]);
    }

    public function show($id)
    {
        Section::where('id',$id)->first()->update(['status'=>'1']);
        alert()->Success('', 'به نمایش در آمد')->persistent('باشه');
        return redirect()->back();
    }
    public function hide($id)
    {
        Section::where('id',$id)->first()->update(['status'=>'0']);
        alert()->Success('', 'مخفی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function pages()
    {
        $sections = Section::where('type','page')->get();
        return view('wp.pages',['sections'=>$sections]);
    }

}
