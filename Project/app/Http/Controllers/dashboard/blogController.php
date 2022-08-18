<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Blog;
use App\Models\en_Blog;
use App\Models\Setting;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use App\Http\Controllers\Controller;

class blogController extends Controller
{


    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $blogs = Blog::orderBy('id','DESC')->get();
        $en_blogs = en_Blog::orderBy('id','DESC')->get();
        return view('wp.blogs', [
            'blogs' => $blogs,
            'en_blogs' => $en_blogs,
            'en'=>$en->value ,
        ]);
    }


    public function new()
    {
        $en = Setting::where('name', 'english')->first('value');
        return view('wp.newArticle',[
            'en'=>$en->value ,

        ]);
    }

    public function create(Request $request)
    {
        $v = verta();
        $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string',
            'keywords' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048',
        ]);
        $image = $request->file('image');
        $image->move(public_path('images/articles'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
        $request->image = '/images/articles/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();

        Blog::create([
            'name' => $request->name,
            'text' =>  $request->text,
            'keywords' =>  $request->keywords,
            'image' => $request->image,
            'date_fa'=> $v->format('d %B Y'),
            'date'=> date('Y-m-d'),
        ]);
        alert()->Success('', 'مقاله جدید ایجاد شد')->persistent('باشه');
        return redirect()->back();
        
    }
    public function en_create(Request $request)
    {
        $v = verta();
        $request->validate([
            'en_name' => 'required|string|max:255',
            'en_text' => 'required|string',
            'en_keywords' => 'required|string',
            'en_image' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048',
        ]);
        $image = $request->file('en_image');
        $image->move(public_path('images/articles'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
        $request->en_image = '/images/articles/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();

        en_Blog::create([
            'name' => $request->en_name,
            'text' =>  $request->en_text,
            'keywords' =>  $request->en_keywords,
            'image' => $request->en_image,
            'date_fa'=> $v->format('d %B Y'),
            'date'=> date('Y-m-d'),
        ]);
        alert()->Success('', 'مقاله جدید انگلیسی ایجاد شد')->persistent('باشه');
        return redirect()->back();
        
    }


    public function delete($id)
    {
        Blog::where('id', $id)->first()->delete();
        alert()->Success('', 'مقاله با موفقیت حذف شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_delete($id)
    {
        en_Blog::where('id', $id)->first()->delete();
        alert()->Success('', 'مقاله انگلیسی  حذف شد')->persistent('باشه');
        return redirect()->back();
    }

    
    public function edit($id)
    {
        $Blog = Blog::where('id', $id)->first();
        return view('wp.editBlog', ['Blog' => $Blog]);
    }

    public function en_edit($id)
    {
        $Blog = en_Blog::where('id', $id)->first();
        return view('wp.edit_En_Blog', ['Blog' => $Blog]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string',
            'keywords' => 'required|string',
            'image' => 'image|mimes:jpg,png,gif,jpeg|max:2048',
        ]);
        if (isset($request->image)) {
            $image = $request->file('image');
            $image->move(public_path('images/articles'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
            $request->image = '/images/articles/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();
        }
        else {
            $request->image =  $request->image_hidden;
        }
        Blog::where('id', $id)->first()->update([
            'name' => $request->name,
            'text' =>  $request->text,
            'keywords' =>  $request->keywords,
            'image' => $request->image,
        ]);

        alert()->Success('', 'مقاله بروز شد')->persistent('باشه');
        return redirect(route('blog'));
    }

    public function en_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string',
            'keywords' => 'required|string',
            'image' => 'image|mimes:jpg,png,gif,jpeg|max:2048',
        ]);
        if (isset($request->image)) {
            $image = $request->file('image');
            $image->move(public_path('images/articles'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
            $request->image = '/images/articles/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();
        }
        else {
            $request->image =  $request->image_hidden;
        }
        en_Blog::where('id', $id)->first()->update([
            'name' => $request->name,
            'text' =>  $request->text,
            'keywords' =>  $request->keywords,
            'image' => $request->image,
        ]);

        alert()->Success('', 'مقاله انگلیسی بروز شد')->persistent('باشه');
        return redirect(route('blog'));
    }

}
