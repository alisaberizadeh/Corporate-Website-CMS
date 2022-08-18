<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Slider;
use App\Models\Setting;
use App\Models\en_Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class sliderController extends Controller
{
    public function index()
    {
        $Slider = Slider::orderBy('id', 'DESC')->get();
        $en_Slider = en_Slider::orderBy('id', 'DESC')->get();
        return view('wp.slider', [
            'Slider' => $Slider,
            'en_Slider' => $en_Slider,
        ]);
    }
    public function new()
    {
        $en = Setting::where('name', 'english')->first('value');
        return view('wp.newSlider', [
            'en' => $en->value,
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $image = $request->file('image');
        $image->move(public_path('images/slider'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
        $request->image = '/images/slider/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();

        Slider::create([
            'title' => "",
            'text' => "",
            'image' => $request->image,
        ]);
        alert()->Success('', 'اسلاید جدید ایجاد شد')->persistent('باشه');
        return redirect()->back();
    }


    public function delete($id)
    {
        Slider::where('id', $id)->first()->delete();
        alert()->Success('', 'اسلاید حذف شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_delete($id)
    {
        en_Slider::where('id', $id)->first()->delete();
        alert()->Success('', 'اسلاید (انگلیسی) حذف شد')->persistent('باشه');
        return redirect()->back();
    }
    public function edit($id)
    {
        $Slider = Slider::where('id', $id)->first();
        return view('wp.editSlider', ['Slider' => $Slider]);
    }
    public function en_edit($id)
    {
        $Slider = en_Slider::where('id', $id)->first();
        return view('wp.editEnSlider', ['Slider' => $Slider]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $image = $request->file('image');
        $image->move(public_path('images/slider'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
        $request->image = '/images/slider/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();

        Slider::where('id', $id)->first()->update([
            'title' => "",
            'text' => "",
            'image' => $request->image,
        ]);

        alert()->Success('', ' اسلاید بروزسانی شد')->persistent('باشه');
        return redirect(route('slider'));
    }

    public function en_update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',

        ]);
            $image = $request->file('image');
            $image->move(public_path('images/slider'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
            $request->image = '/images/slider/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();
  
        en_Slider::where('id', $id)->first()->update([
            'title' => '',
            'text' => '',
            'image' => $request->image,
        ]);

        alert()->Success('', ' اسلاید (انگلیسی) بروزسانی شد')->persistent('باشه');
        return redirect(route('slider'));
    }


    public function en_create(Request $request)
    {
        $request->validate([
            'en_image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
            $image = $request->file('en_image');
            $image->move(public_path('images/slider'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
            $request->en_image = '/images/slider/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();

        en_Slider::create([
            'title' => '',
            'text' => '',
            'image' => $request->en_image,
        ]);
        alert()->Success('', 'اسلاید جدید (انگلیسی) ایجاد شد')->persistent('باشه');
        return redirect()->back();
    }
}
