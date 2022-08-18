<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Menu;
use App\Models\en_Menu;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class menuController extends Controller
{

    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $en_menus = en_Menu::orderBy('id','DESC')->get();
        $menus = Menu::orderBy('id','DESC')->get();
        return view('wp.menu',[
            'menus'=>$menus,
            'en_menus'=>$en_menus,
            'en'=>$en->value,
        ]);
    }
    public function edit($id)
    {
        $menus = Menu::where('id',$id)->first();
        return view('wp.editMenu',['menus'=>$menus]);
    }
    public function en_edit($id)
    {
        $menus = en_Menu::where('id',$id)->first();
        return view('wp.edit_En_Menu',['menus'=>$menus]);
    }
    
    public function sub()
    {
        $menus = Menu::orderBy('id','DESC')->get();
        return view('wp.menuSub',['menus'=>$menus]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'link' => 'required|string',
        ]);
        if (!isset($request->sub)) {
            $request->sub = "";
        }
        if (!isset($request->count)) {
            $request->count = "";
        }
        Menu::create([
            'title'=> $request->title ,
            'link'=> $request->link ,
            'sub'=> $request->sub ,
            'count'=> $request->count ,
        ]);
        alert()->Success('', 'منو اضافه شد')->persistent('باشه');
        return redirect()->back();
    }

    public function en_create(Request $request)
    {
        $request->validate([
            'en_title' => 'required|string|max:100',
            'en_link' => 'required|string',
        ]);
        if (!isset($request->en_sub)) {
            $request->en_sub = "";
        }
        if (!isset($request->en_count)) {
            $request->en_count = "";
        }
        en_Menu::create([
            'title'=> $request->en_title ,
            'link'=> "en/".$request->en_link ,
            'sub'=> $request->en_sub ,
            'count'=> $request->en_count ,
        ]);
        alert()->Success('', 'منو انگلیسی اضافه شد')->persistent('باشه');
        return redirect()->back();
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'link' => 'required|string',
        ]);
        if (!isset($request->sub)) {
            $request->sub = "";
        }
        if (!isset($request->count)) {
            $request->count = "";
        }
        $menu = Menu::find($id);
        $menu->update([
            'title'=> $request->title ,
            'link'=> $request->link ,
            'sub'=> $request->sub ,
            'count'=> $request->count ,
        ]);
        alert()->Success('', '  بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function en_update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'link' => 'required|string',
        ]);
        if (!isset($request->sub)) {
            $request->sub = "";
        }
        if (!isset($request->count)) {
            $request->count = "";
        }
        $menu = en_Menu::find($id);
        $menu->update([
            'title'=> $request->title ,
            'link'=> $request->link ,
            'sub'=> $request->sub ,
            'count'=> $request->count ,
        ]);
        alert()->Success('', ' منو انگلیسی بروزرسانی شد ')->persistent('باشه');
        return redirect(route('menus'));
    }


    public function delete($id)
    {
        Menu::find($id)->delete();
        alert()->Success('', 'حذف شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_delete($id)
    {
        en_Menu::find($id)->delete();
        alert()->Success('', 'منوی انگلیسی حذف شد')->persistent('باشه');
        return redirect()->back();
    }



}
