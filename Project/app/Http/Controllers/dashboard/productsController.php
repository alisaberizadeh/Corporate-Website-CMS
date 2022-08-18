<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Cat;
use App\Models\en_Cat;
use App\Models\Product;
use App\Models\Setting;
use App\Models\en_Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productsController extends Controller
{

    public function index()
    {
        $en = Setting::where('name', 'english')->first('value');
        $cats = Cat::all();
        $en_cats = en_Cat::all();
        $product = Product::all();
        $en_product = en_Product::all();
        return view('wp.products',[
            'cats'=>$cats,
            'en_cats'=>$en_cats,
            'product'=>$product,
            'en_product'=>$en_product,
            'en'=>$en->value
        ]);
    }
    
    public function new()
    {
        $cat = Cat::all();
        $en_cat = en_Cat::all();
        $en = Setting::where('name', 'english')->first('value');
        return view('wp.newProduct',['cat'=>$cat,'en_cat'=>$en_cat,'en'=>$en->value]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'keyworlds' => 'required|string',
            'text' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $image = $request->file('image');
        $image->move(public_path('images/Product'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
        $request->image = '/images/Product/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();

        Product::create([
            'title' => $request->title,
            'text' =>  $request->text,
            'cat' =>  $request->cat,
            'keyworlds' =>  $request->keyworlds,
            'image' =>  $request->image,

        ]);
        alert()->Success('', 'محصول جدید ایجاد شد')->persistent('باشه');
        return redirect()->back();
        
    }

    public function en_create(Request $request)
    {
        $request->validate([
            'en_title' => 'required|string|max:255',
            'en_keyworlds' => 'required|string',
            'en_text' => 'required|string',
            'en_image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $image = $request->file('en_image');
        $image->move(public_path('images/Product'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
        $request->en_image = '/images/Product/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();

        en_Product::create([
            'title' => $request->en_title,
            'text' =>  $request->en_text,
            'cat' =>  $request->en_cat,
            'keyworlds' =>  $request->en_keyworlds,
            'image' =>  $request->en_image,

        ]);
        alert()->Success('', 'محصول جدید انگلیسی ایجاد شد')->persistent('باشه');
        return redirect()->back();
        
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        
        alert()->Success('', 'محصول حذف شد')->persistent('باشه');
        return redirect()->back();
    }
    public function en_delete($id)
    {
        en_Product::find($id)->delete();
        
        alert()->Success('', 'محصول انگلیسی حذف شد')->persistent('باشه');
        return redirect()->back();
    }
    public function edit($id)
    {
        $cat = Cat::all();
        $product = Product::where('id',$id)->first();
        return view('wp.editProduct',['product'=>$product,'cat'=>$cat]);
    }

    public function en_edit($id)
    {
        $cat = en_Cat::all();
        $product = en_Product::where('id',$id)->first();
        return view('wp.edit_En_Product',['product'=>$product,'cat'=>$cat]);
    }
    public function update(Request $request , $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'keyworlds' => 'required|string',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->image)) {
            $image = $request->file('image');
            $image->move(public_path('images/Product'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
            $request->image = '/images/Product/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();    
        }
        else {
            $request->image = $request->hidden_image ;
        }
        Product::find($id)->update([
            'title' => $request->title,
            'text' =>  $request->text,
            'cat' =>  $request->cat,
            'keyworlds' =>  $request->keyworlds,
            'image' =>  $request->image,
        ]);
        
        alert()->Success('', 'محصول بروزرسانی شد')->persistent('باشه');
        return redirect()->back(); 
    }
    public function en_update(Request $request , $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'keyworlds' => 'required|string',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if (isset($request->image)) {
            $image = $request->file('image');
            $image->move(public_path('images/Product'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
            $request->image = '/images/Product/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();    
        }
        else {
            $request->image = $request->hidden_image ;
        }
        en_Product::find($id)->update([
            'title' => $request->title,
            'text' =>  $request->text,
            'cat' =>  $request->cat,
            'keyworlds' =>  $request->keyworlds,
            'image' =>  $request->image,
        ]);
        
        alert()->Success('', 'محصول انگلیسی بروزرسانی شد')->persistent('باشه');
        return redirect(route('products')); 
    }

}
