<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Team;
use App\Models\en_Team;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class teamController extends Controller
{


    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $en_team = en_Team::orderBy('id','DESC')->get();
        $team = Team::orderBy('id','DESC')->get();
        return view('wp.team', [
            'team' => $team,
            'en_team' => $en_team,
            'en'=>$en->value,

        ]);
    }

    public function new()
    {
        $en = Setting::where('name', 'english')->first('value');
        return view('wp.newTeam',['en'=>$en->value,]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'instagram' => 'max:255',
            'linkedin' => 'max:255',
            'github' => 'max:255',
            'twitter' => 'max:255',
            'avatar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $avatar = $request->file('avatar');
        $avatar->move(public_path('images/avatar'), date('Y') . '_' . date('M') . '_' . $avatar->getClientOriginalName());
        $request->avatar = '/images/avatar/' . date('Y') . '_' . date('M') . '_' . $avatar->getClientOriginalName();

        Team::create([
            'name' => $request->name,
            'level' => $request->level,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'twitter' => $request->twitter,
            'avatar' => $request->avatar,
        ]);
        alert()->Success('', 'عضو جدید به تیم اضافه شد')->persistent('باشه');
        return redirect()->back();
    }

    public function en_create(Request $request)
    {
        $request->validate([
            'en_name' => 'required|string|max:255',
            'en_level' => 'required|string|max:255',
            'en_instagram' => 'max:255',
            'en_linkedin' => 'max:255',
            'en_github' => 'max:255',
            'en_twitter' => 'max:255',
            'en_avatar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $avatar = $request->file('en_avatar');
        $avatar->move(public_path('images/avatar'), date('Y') . '_' . date('M') . '_' . $avatar->getClientOriginalName());
        $request->en_avatar = '/images/avatar/' . date('Y') . '_' . date('M') . '_' . $avatar->getClientOriginalName();

        en_Team::create([
            'name' => $request->en_name,
            'level' => $request->en_level,
            'instagram' => $request->en_instagram,
            'linkedin' => $request->en_linkedin,
            'github' => $request->en_github,
            'twitter' => $request->en_twitter,
            'avatar' => $request->en_avatar,
        ]);
        alert()->Success('', 'عضو جدید به تیم اضافه شد(انگلیسی)')->persistent('باشه');
        return redirect()->back();
    }

    public function delete($id)
    {
        Team::where('id', $id)->first()->delete();
        alert()->Success('', 'حذف شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_delete($id)
    {
        en_Team::where('id', $id)->first()->delete();
        alert()->Success('', 'حذف شد')->persistent('باشه');
        return redirect()->back();
    }

    public function edit($id)
    {
        $Team = Team::where('id', $id)->first();
        return view('wp.editTeam', ['Team' => $Team]);
    }
    public function en_edit($id)
    {
        $Team = en_Team::where('id', $id)->first();
        return view('wp.edit_En_Team', ['Team' => $Team]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'instagram' => 'max:255',
            'linkedin' => 'max:255',
            'github' => 'max:255',
            'twitter' => 'max:255',
            'avatar' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->avatar)) {
            $avatar = $request->file('avatar');
            $avatar->move(public_path('images/avatar'), date('Y') . '_' . date('M') . '_' . $avatar->getClientOriginalName());
            $request->avatar = '/images/avatar/' . date('Y') . '_' . date('M') . '_' . $avatar->getClientOriginalName();
        }
        else {
            $request->avatar =  $request->avatar_hidden;
        }
        Team::where('id', $id)->first()->update([
            'name' => $request->name,
            'level' => $request->level,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'twitter' => $request->twitter,
            'avatar' => $request->avatar,
        ]);

        alert()->Success('', 'اطلاعات کارمند بروز شد')->persistent('باشه');
        return redirect(route('team'));
    }
    public function en_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'instagram' => 'max:255',
            'linkedin' => 'max:255',
            'github' => 'max:255',
            'twitter' => 'max:255',
            'avatar' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->avatar)) {
            $avatar = $request->file('avatar');
            $avatar->move(public_path('images/avatar'), date('Y') . '_' . date('M') . '_' . $avatar->getClientOriginalName());
            $request->avatar = '/images/avatar/' . date('Y') . '_' . date('M') . '_' . $avatar->getClientOriginalName();
        }
        else {
            $request->avatar =  $request->avatar_hidden;
        }
        en_Team::where('id', $id)->first()->update([
            'name' => $request->name,
            'level' => $request->level,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'twitter' => $request->twitter,
            'avatar' => $request->avatar,
        ]);

        alert()->Success('', 'اطلاعات کارمند انگلیسی بروز شد')->persistent('باشه');
        return redirect(route('team'));
    }
}
