<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Setting;
use App\Models\Statistic;
use App\Models\Background;
use App\Models\en_Statistic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class statisticsController extends Controller
{
    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $Statistic = Statistic::orderBy('id', 'DESC')->get();
        $en_Statistic = en_Statistic::orderBy('id', 'DESC')->get();
        $background = Background::where('name', 'statistics')->first();
        return view('wp.statistics', [
            'en_Statistic' => $en_Statistic,
            'Statistic' => $Statistic,
            'en'=>$en->value,
            'background' => $background,
        ]);
    }
    public function update(Request $request)
    {
        Statistic::where('id', '1')->first()->update([
            'title' => $request->title_1,
            'value' => $request->value_1,
            'icon' => $request->icon_1,
        ]);
        Statistic::where('id', '2')->first()->update([
            'title' => $request->title_2,
            'value' => $request->value_2,
            'icon' => $request->icon_2,
        ]);
        Statistic::where('id', '3')->first()->update([
            'title' => $request->title_3,
            'value' => $request->value_3,
            'icon' => $request->icon_3,
        ]);

        Statistic::where('id', '4')->first()->update([
            'title' => $request->title_4,
            'value' => $request->value_4,
            'icon' => $request->icon_4,
        ]);

        alert()->Success('', ' آمار بروزسانی شد')->persistent('باشه');
        return redirect(route('statistics'));
    }
    public function en_update(Request $request)
    {
        en_Statistic::where('id', '1')->first()->update([
            'title' => $request->title_1,
            'value' => $request->value_1,
            'icon' => $request->icon_1,
        ]);
        en_Statistic::where('id', '2')->first()->update([
            'title' => $request->title_2,
            'value' => $request->value_2,
            'icon' => $request->icon_2,
        ]);
        en_Statistic::where('id', '3')->first()->update([
            'title' => $request->title_3,
            'value' => $request->value_3,
            'icon' => $request->icon_3,
        ]);

        en_Statistic::where('id', '4')->first()->update([
            'title' => $request->title_4,
            'value' => $request->value_4,
            'icon' => $request->icon_4,
        ]);

        alert()->Success('', ' آمار انگلیسی بروزسانی شد')->persistent('باشه');
        return redirect(route('statistics'));
    }

    public function hide($id)
    {
        Statistic::where('id', $id)->first()->update(['status' => '0',]);
        alert()->Success('', ' مخفی شد')->persistent('باشه');
        return redirect(route('statistics'));
    }
    public function show($id)
    {
        Statistic::where('id', $id)->first()->update(['status' => '1',]);
        alert()->Success('', ' به نمایش درآمد')->persistent('باشه');
        return redirect(route('statistics'));
    }
    public function en_hide($id)
    {
        en_Statistic::where('id', $id)->first()->update(['status' => '0',]);
        alert()->Success('', ' مخفی شد')->persistent('باشه');
        return redirect(route('statistics'));
    }
    public function  en_show($id)
    {
        en_Statistic::where('id', $id)->first()->update(['status' => '1',]);
        alert()->Success('', ' به نمایش درآمد')->persistent('باشه');
        return redirect(route('statistics'));
    }


    public function background_update(Request $request)
    {
        if (isset($request->background)) {
            $request->validate([
                'background' => 'image|mimes:jpg,png,jpeg|max:2048',
            ]);
            $background = $request->file('background');
            $background->move(public_path('images/backgrounds'), date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName());
            $request->background = '/images/backgrounds/' . date('Y') . '_' . date('M') . '_' . $background->getClientOriginalName();
        } else {
            $request->background = $request->hidden_background;
        }
        Background::where('name', 'statistics')->first()->update([
            'src' => $request->background,
        ]);
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }
}
