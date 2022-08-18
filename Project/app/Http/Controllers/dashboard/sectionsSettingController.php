<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Background;
use App\Models\Sections_Setting;
use Illuminate\Http\Request;

class sectionsSettingController extends Controller
{
    public function services()
    {
        $services = Sections_Setting::where('name','services')->first();
        return view('wp.servicesSetting',[
            'services' => $services
        ]);
    }
    public function categorys_single()
    {
        $categorys_bg = Background::where('name','categorys')->first();
        return view('wp.categorys_singleSetting',['categorys_bg'=>$categorys_bg]);
    }


    public function categorys_update(Request $request , $id)
    {
        $request->validate([
            'background' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->background)) {
            $background = $request->file('background');
            $background->move(public_path('images/backgrounds'), date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName());
            $request->background = '/images/backgrounds/' . date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName();    
        }
        else{
            $request->background = $request->hidden_background;
        }
        Background::where('name','categorys')->first()->update([
            'src'=>$request->background
        ]);
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function services_single()
    {
        $sevice_bg = Background::where('name','sevice_single')->first();
        return view('wp.service_singleSetting',['sevice_bg'=>$sevice_bg]);
    }

    public function services_single_update(Request $request , $id)
    {
        $request->validate([
            'background' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->background)) {
            $background = $request->file('background');
            $background->move(public_path('images/backgrounds'), date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName());
            $request->background = '/images/backgrounds/' . date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName();    
        }
        else{
            $request->background = $request->hidden_background;
        }
        Background::where('name','sevice_single')->first()->update([
            'src'=>$request->background
        ]);
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function services_update(Request $request , $id)
    {
        Sections_Setting::where('id',$id)->first()->update([
            'name_fa'=>$request->name_fa,
            'title'=>$request->title,
            'count'=>$request->count,
        ]);
        
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }
    public function team()
    {
        $team = Sections_Setting::where('name','team')->first();
        return view('wp.teamSetting',[
            'team' => $team
        ]);
    }

    public function team_update(Request $request,$id)
    {
        Sections_Setting::where('id',$id)->first()->update([
            'name_fa'=>$request->name_fa,
            'title'=>$request->title,
            'count'=>$request->count,
        ]);
        
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }
    
    public function plans()
    {
        $plans = Sections_Setting::where('name','plans')->first();
        return view('wp.planSetting',[
            'plans' => $plans
        ]);
    }


    public function plans_update(Request $request,$id)
    {
        Sections_Setting::where('id',$id)->first()->update([
            'name_fa'=>$request->name_fa,
            'title'=>$request->title,
            'count'=>$request->count,
        ]);
        
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function blog()
    {
        $blog = Sections_Setting::where('name','blog')->first();
        return view('wp.blogSetting',[
            'blog' => $blog
        ]);
    }
    public function blog_update(Request $request,$id)
    {
        Sections_Setting::where('id',$id)->first()->update([
            'name_fa'=>$request->name_fa,
            'title'=>$request->title,
            'count'=>$request->count,
        ]);
        
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function portfolio()
    {
        $portfolio = Sections_Setting::where('name','portfolio')->first();
        $background = Background::where('name','portfolio')->first();
        return view('wp.portfolioSetting',[
            'portfolio' => $portfolio,
            'background' => $background,
        ]);
    }

    public function portfolio_update(Request $request , $id)
    {
        $request->validate([
            'name_fa' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'background' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->background)) {
            $background = $request->file('background');
            $background->move(public_path('images/backgrounds'), date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName());
            $request->background = '/images/backgrounds/' . date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName();    
        }
        else{
            $request->background = $request->hidden_background;
        }
        Sections_Setting::where('id',$id)->first()->update([
            'name_fa'=>$request->name_fa,
            'title'=>$request->title,
        ]);
        Background::where('name','portfolio')->first()->update([
            'src'=>$request->background,
        ]);
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function contact()
    {
        $contact = Sections_Setting::where('name','contact')->first();
        $background = Background::where('name','contact')->first();
        return view('wp.contactSetting',[
            'contact' => $contact,
            'background' => $background,
        ]);
    }

    public function contact_update(Request $request , $id)
    {
        $request->validate([
            'name_fa' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'background' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->background)) {
            $background = $request->file('background');
            $background->move(public_path('images/backgrounds'), date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName());
            $request->background = '/images/backgrounds/' . date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName();    
        }
        else{
            $request->background = $request->hidden_background;
        }
        Sections_Setting::where('id',$id)->first()->update([
            'name_fa'=>$request->name_fa,
            'title'=>$request->title,
        ]);
        Background::where('name','contact')->first()->update([
            'src'=>$request->background,
        ]);
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function about()
    {
        $about = Sections_Setting::where('name','about')->first();
        $background = Background::where('name','about')->first();
        return view('wp.aboutSetting',[
            'about' => $about,
            'background' => $background,
        ]);
    }

    public function about_update(Request $request , $id)
    {
        $request->validate([
            'name_fa' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'background' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->background)) {
            $background = $request->file('background');
            $background->move(public_path('images/backgrounds'), date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName());
            $request->background = '/images/backgrounds/' . date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName();    
        }
        else{
            $request->background = $request->hidden_background;
        }
        Sections_Setting::where('id',$id)->first()->update([
            'name_fa'=>$request->name_fa,
            'title'=>$request->title,
        ]);
        Background::where('name','about')->first()->update([
            'src'=>$request->background,
        ]);
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }


    public function blog_page()
    {
        $background = Background::where('name','blog')->first();
        return view('wp.blogPageSetting',[
            'background' => $background,
        ]);
    }

    public function blog_page_update(Request $request)
    {
        $request->validate([
            'background' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->background)) {
            $background = $request->file('background');
            $background->move(public_path('images/backgrounds'), date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName());
            $request->background = '/images/backgrounds/' . date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName();    
        }
        else{
            $request->background = $request->hidden_background;
        }
        Background::where('name','blog')->first()->update([
            'src'=>$request->background,
        ]);
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    
    public function random_product()
    {
        $random_product = Sections_Setting::where('name','random_product')->first();
        return view('wp.random_productSetting',[
            'random_product' => $random_product
        ]);
    }

    public function random_product_update(Request $request , $id)
    {
        Sections_Setting::where('id',$id)->first()->update([
            'name_fa'=>$request->name_fa,
            'title'=>$request->title,
        ]);
        
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

}
