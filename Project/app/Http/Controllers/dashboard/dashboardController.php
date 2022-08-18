<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class dashboardController extends Controller
{
    public function index()
    {
        return view('wp.index');
    }
 
    public function update(Request $request,$id)
    {
         if (isset($request->password)) {
            $request->validate([
                "name" => "required|string|max:255",
                "email" => "required|email|unique:users,email,$id",
                'password' => "required|string|min:8|confirmed",
            ]);
            User::where('id',$id)->first()->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);
         }
         else {
            $request->validate([
                "name" => "required|string|max:255",
                "email" => "required|email|unique:users,email,$id",
            ]);
            User::where('id',$id)->first()->update([
                'name'=>$request->name,
                'email'=>$request->email,
            ]);
         }
         
        alert()->Success('', '  اطلاعات شما بروزرسانی شد')->persistent('باشه');
        return redirect()->back();

    }
}
 