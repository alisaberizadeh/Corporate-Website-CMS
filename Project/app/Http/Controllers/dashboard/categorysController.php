<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Cat;
use App\Models\en_Cat;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categorysController extends Controller
{
    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $categorys = Cat::orderBy('id', 'DESC')->get();
        $en_categorys = en_Cat::orderBy('id', 'DESC')->get();
        return view('wp.categorys', [
        'categorys' => $categorys,
        'en_categorys' => $en_categorys,
        'en'=>$en->value
        ]);
    }
    public function delete($id)
    {
        Cat::find($id)->delete();

        alert()->Success('', '  دسته بندی حذف شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_delete($id)
    {
        en_Cat::find($id)->delete();

        alert()->Success('', '  دسته بندی انگلیسی حذف شد')->persistent('باشه');
        return redirect()->back();
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        $check = Cat::where('name', $request->name)->first();
        if ($check) {
            alert()->error('', '  دسته بندی قبلا ایجاد شده !!!')->persistent('باشه');
            return redirect()->back();
        }
        else {
            Cat::create([
                'name' => $request->name
            ]);
            alert()->Success('', '  دسته بندی جدید اضافه شد')->persistent('باشه');
            return redirect()->back();
        }
    }
    public function en_create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        $check = Cat::where('name', $request->name)->first();
        if ($check) {
            alert()->error('', '  دسته بندی انگلیسی قبلا ایجاد شده !!!')->persistent('باشه');
            return redirect()->back();
        }
        else {
            en_Cat::create([
                'name' => $request->name
            ]);
            alert()->Success('', '  دسته بندی انگلیسی اضافه شد')->persistent('باشه');
            return redirect()->back();
        }
    }
}
