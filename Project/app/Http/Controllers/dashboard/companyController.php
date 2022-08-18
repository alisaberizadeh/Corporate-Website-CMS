<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Company_Information;
use App\Http\Controllers\Controller;
use App\Models\en_Company_Information;

class companyController extends Controller
{
    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $email = Company_Information::where('name','email')->first();
        $address = Company_Information::where('name','address')->first();
        $phone = Company_Information::where('name','phone')->first();
        $mobile = Company_Information::where('name','mobile')->first();
        $en_email = en_Company_Information::where('name','email')->first();
        $en_address = en_Company_Information::where('name','address')->first();
        $en_phone = en_Company_Information::where('name','phone')->first();
        $en_mobile = en_Company_Information::where('name','mobile')->first();
        return view('wp.information',[
            'email'=>$email,
            'address'=>$address,
            'phone'=>$phone,
            'mobile'=>$mobile,
            'en_email'=>$en_email,
            'en_address'=>$en_address,
            'en_phone'=>$en_phone,
            'en_mobile'=>$en_mobile,
            'en'=>$en->value,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'email'=>'string|email',
            'mobile'=>'string|max:11|min:11',
            'phone'=>'string|max:11|min:11',
            'address'=>'string',
        ]);
        $email = Company_Information::where('name','email')->first();
        $mobile = Company_Information::where('name','mobile')->first();
        $address = Company_Information::where('name','address')->first();
        $phone = Company_Information::where('name','phone')->first();
        $email->update([ 'value'=>$request->email ]);
        $mobile->update([ 'value'=>$request->mobile ]);
        $address->update([ 'value'=>$request->address ]);
        $phone->update([ 'value'=>$request->phone ]);

        alert()->Success('', 'اطلاعات شرکت بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_update(Request $request)
    {
        $request->validate([
            'en_email'=>'string|email',
            'en_mobile'=>'string|max:11|min:11',
            'en_phone'=>'string|max:11|min:11',
            'en_address'=>'string',
        ]);
        $email = en_Company_Information::where('name','email')->first();
        $mobile = en_Company_Information::where('name','mobile')->first();
        $address = en_Company_Information::where('name','address')->first();
        $phone = en_Company_Information::where('name','phone')->first();
        $email->update([ 'value'=>$request->en_email ]);
        $mobile->update([ 'value'=>$request->en_mobile ]);
        $address->update([ 'value'=>$request->en_address ]);
        $phone->update([ 'value'=>$request->en_phone ]);

        alert()->Success('', 'اطلاعات شرکت بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }


    public function show($id)
    {
        $item = Company_Information::where('id',$id)->first();
        $item->update([
            'status'=>'1'
        ]);
        
        alert()->Success('', 'به نمایش در آمد')->persistent('باشه');
        return redirect()->back();
    }
    public function hide($id)
    {
        $item = Company_Information::where('id',$id)->first();
        $item->update([
            'status'=>'0'
        ]);
        
        alert()->Success('', 'با موفقیت مخفی شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_show($id)
    {
        $item = en_Company_Information::where('id',$id)->first();
        $item->update([
            'status'=>'1'
        ]);
        
        alert()->Success('', 'به نمایش در آمد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_hide($id)
    {
        $item = en_Company_Information::where('id',$id)->first();
        $item->update([
            'status'=>'0'
        ]);
        
        alert()->Success('', 'با موفقیت مخفی شد')->persistent('باشه');
        return redirect()->back();
    }

}

