<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Plan;
use App\Models\en_Plan;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class plansController extends Controller
{
    
    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $plans = Plan::orderBy('id','DESC')->get();
        $en_plans = en_Plan::orderBy('id','DESC')->get();
        return view('wp.plans',[
            'plans'=>$plans,
            'en'=>$en->value,
            'en_plans'=>$en_plans,
        ]); 
    }
    
    public function new()
    {
        $en = Setting::where('name', 'english')->first('value');
        return view('wp.newPlan',[
            'en'=>$en->value,
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'text' => 'required|string',
            'price' => 'required|string',
            'type' => 'required',
        ]);
        Plan::create([
            'name'=>$request->name,
            'text'=>$request->text,
            'price'=>$request->price,
            'type'=>$request->type,
        ]);
        alert()->Success('', 'طرح جدید ایجاد شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_create(Request $request)
    {
        $request->validate([
            'en_name' => 'required|string|max:50',
            'en_text' => 'required|string',
            'en_price' => 'required|string',
            'en_type' => 'required',
        ]);
        en_Plan::create([
            'name'=>$request->en_name,
            'text'=>$request->en_text,
            'price'=>$request->en_price,
            'type'=>$request->en_type,
        ]);
        alert()->Success('', 'طرح جدید انگلیسی ایجاد شد')->persistent('باشه');
        return redirect()->back();
    }

    
    public function delete($id)
    {
        Plan::find($id)->delete();
        alert()->Success('', 'طرح با موفقیت حذف شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_delete($id)
    {
        en_Plan::find($id)->delete();
        alert()->Success('', 'طرح انگلیسی حذف شد')->persistent('باشه');
        return redirect()->back();
    }

    public function edit($id)
    {
        $plan = Plan::where('id', $id)->first();
        return view('wp.editPlan', ['plan' => $plan]);
    }
    public function en_edit($id)
    {
        $plan = en_Plan::where('id', $id)->first();
        return view('wp.edit_En_Plan', ['plan' => $plan]);
    }

    public function update(Request $request ,$id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'text' => 'required|string',
            'price' => 'required|string',
            'type' => 'required',
        ]); 
        Plan::find($id)->update([
            'name'=>$request->name,
            'text'=>$request->text,
            'price'=>$request->price,
            'type'=>$request->type,
        ]);
        
        alert()->Success('', 'اطلاعات طرح بروز شد')->persistent('باشه');
        return redirect(route('plans'));
    }
    public function en_update(Request $request ,$id)
   {
       $request->validate([
           'name' => 'required|string|max:50',
           'text' => 'required|string',
           'price' => 'required|string',
           'type' => 'required',
       ]); 
       en_Plan::find($id)->update([
           'name'=>$request->name,
           'text'=>$request->text,
           'price'=>$request->price,
           'type'=>$request->type,
       ]);
       
       alert()->Success('', 'اطلاعات طرح انگلیسی بروز شد')->persistent('باشه');
       return redirect(route('plans'));
   }
    

}
