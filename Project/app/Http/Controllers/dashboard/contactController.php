<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Contact;
use App\Models\Setting;
use App\Models\Background;
use App\Models\en_Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $contact = Contact::orderBy('id', 'DESC')->get();
        $en_contact = en_Contact::orderBy('id', 'DESC')->get();
        $background = Background::where('name', 'contact')->first();
        return view('wp.contact', [
            'en_contact' => $en_contact,
            'contact' => $contact,
            'en'=>$en->value,
            'background' => $background,
        ]);
    }
    
    public function update(Request $request)
    {
        Contact::where('id', '1')->first()->update([
            'title' => $request->title_1,
            'text' => $request->text_1,
            'icon' => $request->icon_1,
        ]);

        Contact::where('id', '2')->first()->update([
            'title' => $request->title_2,
            'text' => $request->text_2,
            'icon' => $request->icon_2,
        ]);

        Contact::where('id', '3')->first()->update([
            'title' => $request->title_3,
            'text' => $request->text_3,
            'icon' => $request->icon_3,
        ]);
 

        alert()->Success('', '  بروزسانی شد')->persistent('باشه');
        return redirect(route('contact'));
    }

    public function en_update(Request $request)
    {
        en_Contact::where('id', '1')->first()->update([
            'title' => $request->en_title_1,
            'text' => $request->en_text_1,
            'icon' => $request->en_icon_1,
        ]);

        en_Contact::where('id', '2')->first()->update([
            'title' => $request->en_title_2,
            'text' => $request->en_text_2,
            'icon' => $request->en_icon_2,
        ]);

        en_Contact::where('id', '3')->first()->update([
            'title' => $request->en_title_3,
            'text' => $request->en_text_3,
            'icon' => $request->en_icon_3,
        ]);
     

        alert()->Success('', 'عناصر انگلیسی بروزسانی شد ')->persistent('باشه');
        return redirect(route('contact'));
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
        Background::where('name', 'contact')->first()->update([
            'src' => $request->background,
        ]);
        alert()->Success('', 'بروزرسانی شد')->persistent('باشه');
        return redirect()->back();
    }


}
