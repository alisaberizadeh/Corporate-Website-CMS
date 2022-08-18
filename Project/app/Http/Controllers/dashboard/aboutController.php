<?php

namespace App\Http\Controllers\dashboard;

use App\Models\About;
use App\Models\Setting;
use App\Models\en_About;
use Illuminate\Http\Request;
use App\Models\About_Element;
use App\Models\en_about__element;
use App\Http\Controllers\Controller;

class aboutController extends Controller
{
    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $about = About::where('id','1')->first();
        $en_about = en_About::where('id','1')->first();
        return view('wp.about', [
            'en'=>$en->value ,
            'about' => $about,
            'en_about' => $en_about,
        ]);
    }
    public function update(Request $request)
    {
        About::where('id','1')->first()->update([
            'text' => $request->text,
        ]);

        alert()->Success('', 'متن درباره ما بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_update(Request $request)
    {
        en_About::where('id','1')->first()->update([
            'text' => $request->en_text,
        ]);

        alert()->Success('', 'متن درباره ما انگلیسی بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }

    public function elements()
    {
        $en = Setting::where('name', 'english')->first('value');
        $elements = About_Element::all();
        $en_elements = en_about__element::all();
        return view('wp.elementsAbout',[
            'en'=>$en->value ,
            'elements'=>$elements,
            'en_elements'=>$en_elements,
        ]);
    }

    
    public function elements_update(Request $request)
    {
        About_Element::where('id','1')->first()->update([
            'title' => $request->title_1,
            'icon' => $request->icon_1,
            'text' => $request->text_1,
        ]);
        About_Element::where('id','2')->first()->update([
            'title' => $request->title_2,
            'icon' => $request->icon_2,
            'text' => $request->text_2,
        ]);
        About_Element::where('id','3')->first()->update([
            'title' => $request->title_3,
            'icon' => $request->icon_3,
            'text' => $request->text_3,
        ]);
        About_Element::where('id','4')->first()->update([
            'title' => $request->title_4,
            'icon' => $request->icon_4,
            'text' => $request->text_4,
        ]);

        alert()->Success('', 'عناصر درباره ما بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_elements_update(Request $request)
    {
        en_about__element::where('id','1')->first()->update([
            'title' => $request->en_title_1,
            'icon' => $request->en_icon_1,
            'text' => $request->en_text_1,
        ]);
        en_about__element::where('id','2')->first()->update([
            'title' => $request->en_title_2,
            'icon' => $request->en_icon_2,
            'text' => $request->en_text_2,
        ]);
        en_about__element::where('id','3')->first()->update([
            'title' => $request->en_title_3,
            'icon' => $request->en_icon_3,
            'text' => $request->en_text_3,
        ]);
        en_about__element::where('id','4')->first()->update([
            'title' => $request->en_title_4,
            'icon' => $request->en_icon_4,
            'text' => $request->en_text_4,
        ]);

        alert()->Success('', 'عناصر درباره ما انگلیسی بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }
}
