<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Service;
use App\Models\Setting;
use App\Models\en_Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class servicesController extends Controller
{
    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $service = Service::orderBy('id','DESC')->get();
        $en_service = en_Service::orderBy('id','DESC')->get();
        return view('wp.services',['service'=>$service,'en_service'=>$en_service,'en'=>$en->value]);
    }

    public function new()
    {
        $en = Setting::where('name', 'english')->first('value');
        return view('wp.newService',[
            'en'=>$en->value,
        ]);
    }

    public function en_create(Request $request)
    {
        $request->validate([
            'en_name' => 'required|string|max:50',
            'en_icon' => 'required|string|max:50',
            'en_text' => 'required|string',
        ]);
        en_Service::create([
            'name'=>$request->en_name,
            'icon'=>$request->en_icon,
            'text'=>$request->en_text,
        ]);
        alert()->Success('', 'سرویس جدید انگلیسی ایجاد شد')->persistent('باشه');
        return redirect()->back();
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'icon' => 'required|string|max:50',
            'text' => 'required|string',
        ]);
        Service::create([
            'name'=>$request->name,
            'icon'=>$request->icon,
            'text'=>$request->text,
        ]);
        alert()->Success('', 'سرویس جدید ایجاد شد')->persistent('باشه');
        return redirect()->back();
    }

    public function delete($id)
    {
        Service::find($id)->delete();
        alert()->Success('', 'سرویس حذف  شد')->persistent('باشه');
        return redirect()->back();
    }

    public function edit($id)
    {
        $service = Service::where('id',$id)->first();
        return view('wp.editService',['service'=>$service]);
    }
    public function en_edit($id)
    {
        $service = en_Service::where('id',$id)->first();
        return view('wp.edit_En_Service',['service'=>$service]);
    }

    public function update(Request $request ,$id)
    {
        Service::where('id',$id)->first()->update([
            'name'=>$request->name,
            'icon'=>$request->icon,
            'text'=>$request->text,
        ]);
        
        alert()->Success('', 'اطلاعات سرویس بروز شد')->persistent('باشه');
        return redirect(route('services'));
    }

    public function en_update(Request $request ,$id)
    {
        en_Service::where('id',$id)->first()->update([
            'name'=>$request->name,
            'icon'=>$request->icon,
            'text'=>$request->text,
        ]);
        
        alert()->Success('', 'اطلاعات سرویس انگلیسی بروز شد')->persistent('باشه');
        return redirect(route('services'));
    }

}
