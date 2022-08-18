<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','DESC')->get();
       return view('wp.users',['users'=>$users]);
    }
    public function new()
    {
       return view('wp.newUser');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create([
            'name'=>$request->name,
            'level'=>'1',
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
 
        alert()->Success('', 'مدیر جدید ایجاد شد')->persistent('باشه');
        return redirect()->back();
    }

    public function delete($id)
    {
        User::find($id)->delete();
        alert()->Success('', 'مدیر حذف شد')->persistent('باشه');
        return redirect()->back();
    }
}
