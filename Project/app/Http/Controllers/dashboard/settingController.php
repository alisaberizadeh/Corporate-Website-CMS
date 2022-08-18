<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $link_whatsapp = Setting::where('name', 'link_whatsapp')->first('value');
        $repair = Setting::where('name', 'repair')->first('value');
        $color_base = Setting::where('name', 'color_base')->first('value');
        $fav = Setting::where('name', 'fav')->first('value');
        $logo_1 = Setting::where('name', 'logo_1')->first('value');
        $title = Setting::where('name', 'title')->first();
        $logo_2 = Setting::where('name', 'logo_2')->first();
        $description = Setting::where('name', 'description')->first();
        $keyworlds = Setting::where('name', 'keyworlds')->first();
        return view('wp.setting', [
            'keyworlds' => $keyworlds->value_en,
            'en_keyworlds' => $keyworlds->value_en,
            'en' => $en->value,
            'repair' => $repair->value,
            'color_base' => $color_base->value,
            'fav' => $fav->value,
            'logo_1' => $logo_1->value,
            'logo_2' => $logo_2->value,
            'title' => $title->value,
            'en_title' => $title->value_en,
            'description' => $description->value,
            'en_description' => $description->value_en,
            'link_whatsapp' => $link_whatsapp->value,
        ]);
    }
    public function base(Request $request)
    {

        $request->validate([
            "fav" => "image|mimes:jpg,png,jpeg|max:2048",
        ]);

        $keyworlds = Setting::where('name', 'keyworlds');
        $keyworlds->update([
            'value' => $request->keyworlds
        ]);
        $eng = Setting::where('name', 'english');
        $eng->update([
            'value' => $request->english
        ]);
        if (empty($request->link_whatsapp)) {
            $request->link_whatsapp = "";
        }
        $link_whatsapp = Setting::where('name', 'link_whatsapp');
        $link_whatsapp->update([
            'value' => $request->link_whatsapp
        ]);

        $repair = Setting::where('name', 'repair');
        $repair->update([
            'value' => $request->repair
        ]);

        $color_base = Setting::where('name', 'color_base');
        $color_base->update([
            'value' => $request->color_base
        ]);

        $title = Setting::where('name', 'title');
        $title->update([
            'value' => $request->title
        ]);

        $description = Setting::where('name', 'description');
        $description->update([
            'value' => $request->description
        ]);



        if (isset($request->fav)) {
            $fav = Setting::where('name', 'fav');
            $fav_file = $request->file('fav');
            $fav_file->move(public_path('images/fav'),  date('Y') . '_' . date('M') . '_' . date('d') . '_' . $fav_file->getClientOriginalName());
            $request->fav = "/images/fav/" . date('Y') . '_' . date('M') . '_' . date('d') . '_' . $fav_file->getClientOriginalName();
            $fav->update([
                'value' => $request->fav
            ]);
        }

        alert()->Success('', 'اطلاعات بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function en_base(Request $request)
    {

        $en_keyworlds = Setting::where('name', 'keyworlds');
        $en_keyworlds->update([
            'value_en' => $request->en_keyworlds
        ]);


        $en_title = Setting::where('name', 'title');
        $en_title->update([
            'value_en' => $request->en_title
        ]);

       

        $en_description = Setting::where('name', 'description');
        $en_description->update([
            'value_en' => $request->en_description
        ]);

        alert()->Success('', 'اطلاعات انگلیسی بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function logo1(Request $request)
    {
        $request->validate([
            "logo1" => "image|mimes:jpg,png,svg,jpeg|max:2048",
        ]);
        if (isset($request->logo1)) {  
            $logo_1 = Setting::where('name', 'logo_1');
            $logo1_file = $request->file('logo1');
            $logo1_file->move(public_path('images/logo'),  date('Y') . '_' . date('M') . '_' . date('d') . '_' . $logo1_file->getClientOriginalName());
            $request->logo1 = "/images/logo/" . date('Y') . '_' . date('M') . '_' . date('d') . '_' . $logo1_file->getClientOriginalName();
            $logo_1->update([
                'value' => $request->logo1
            ]);
            
        }
        alert()->Success('', 'اطلاعات بروزرسانی شد')->persistent('باشه');
            return redirect()->back();
    }

    public function logo2(Request $request)
    {
        $request->validate([
            "logo2" => "image|mimes:jpg,png,svg,jpeg|max:2048",
        ]);
        if (isset($request->logo2)) {
            
            $logo_2 = Setting::where('name', 'logo_2');
            $logo2_file = $request->file('logo2');
            $logo2_file->move(public_path('images/logo'),  date('Y') . '_' . date('M') . '_' . date('d') . '_' . $logo2_file->getClientOriginalName());
            $request->logo2 = "/images/logo/" . date('Y') . '_' . date('M') . '_' . date('d') . '_' . $logo2_file->getClientOriginalName();
            $logo_2->update([
                'value' => $request->logo2
            ]);
        }
        
        alert()->Success('', 'اطلاعات بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }
}
