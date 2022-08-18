<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Cat;
use App\Models\Setting;
use App\Models\Portfolio;
use App\Models\en_Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class portfolioController extends Controller
{
    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $Portfolio = Portfolio::orderBy('id','DESC')->get();
        $en_Portfolio = en_Portfolio::orderBy('id','DESC')->get();
        return view('wp.portfolios',[
            'en'=>$en->value,
            'Portfolio'=>$Portfolio,
            'en_Portfolio'=>$en_Portfolio,
        ]);
    }

    public function new()
    {
        $cat = Cat::all();
        $en = Setting::where('name', 'english')->first('value');
        return view('wp.newPortfolio',[
            'en'=>$en->value,
            'cat'=>$cat
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'link' => 'required|string|max:50',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $image = $request->file('image');
        $image->move(public_path('images/Portfolio'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
        $request->image = '/images/Portfolio/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();

        Portfolio::create([
            'name'=>$request->name,
            'link'=>$request->link,
            'image'=>$request->image,
        ]);
        alert()->Success('', 'نونه کار جدید ایجاد شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_create(Request $request)
    {
        $request->validate([
            'en_name' => 'required|string|max:50',
            'en_link' => 'required|string|max:50',
            'en_image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $image = $request->file('en_image');
        $image->move(public_path('images/Portfolio'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
        $request->en_image = '/images/Portfolio/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();

        en_Portfolio::create([
            'name'=>$request->en_name,
            'link'=>$request->en_link,
            'image'=>$request->en_image,
        ]);
        alert()->Success('', 'نونه کار انگلیسی جدید ایجاد شد')->persistent('باشه');
        return redirect()->back();
    }
    
    public function delete($id)
    {
        Portfolio::find($id)->delete();
        alert()->Success('', 'نمونه کار حذف  شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_delete($id)
    {
        en_Portfolio::find($id)->delete();
        alert()->Success('', 'نمونه کار  انگلیسی حذف  شد')->persistent('باشه');
        return redirect()->back();
    }

    public function edit($id)
    {
        $Portfolio = Portfolio::where('id',$id)->first();
        return view('wp.editPortfolio',['Portfolio'=>$Portfolio]);
    }
    public function en_edit($id)
    {
        $Portfolio = en_Portfolio::where('id',$id)->first();
        return view('wp.edit_En_Portfolio',['Portfolio'=>$Portfolio]);
    }

    public function update(Request $request ,$id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'link' => 'required|string|max:50',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->image)) {
            $image = $request->file('image');
            $image->move(public_path('images/Portfolio'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
            $request->image = '/images/Portfolio/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();    
        }
        else {
            $request->image = $request->hidden_image;
        }
        Portfolio::where('id',$id)->first()->update([
            'name'=>$request->name,
            'link'=>$request->link,
            'image'=>$request->image,
        ]);
        
        alert()->Success('', ' نمونه کار  بروزرسانی شد')->persistent('باشه');
        return redirect(route('portfolio'));
    }
    public function en_update(Request $request ,$id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'link' => 'required|string|max:50',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->image)) {
            $image = $request->file('image');
            $image->move(public_path('images/Portfolio'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
            $request->image = '/images/Portfolio/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();    
        }
        else {
            $request->image = $request->hidden_image;
        }
        en_Portfolio::where('id',$id)->first()->update([
            'name'=>$request->name,
            'link'=>$request->link,
            'image'=>$request->image,
        ]);
        
        alert()->Success('', ' نمونه کار انگلیسی  بروزرسانی شد')->persistent('باشه');
        return redirect(route('portfolio'));
    }


}
