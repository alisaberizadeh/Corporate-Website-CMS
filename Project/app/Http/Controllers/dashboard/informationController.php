<?php

namespace App\Http\Controllers;

use App\Models\Company_Information;
use Illuminate\Http\Request;

class informationController extends Controller
{
    public function index()
    {
        $email = Company_Information::where('name','email')->first();
        $address = Company_Information::where('name','address')->first();
        $phone = Company_Information::where('name','phone')->first();
        $mobile = Company_Information::where('name','mobile')->first();
        return view('wp.information',[
            'email'=>$email,
            'address'=>$address,
            'phone'=>$phone,
            'mobile'=>$mobile,
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

}
