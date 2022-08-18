<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Blog;
use App\Models\Menu;
use App\Models\Plan;
use App\Models\Team;
use App\Models\About;
use App\Models\en_Cat;
use App\Models\Slider;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\en_Blog;
use App\Models\en_Menu;
use App\Models\en_Plan;
use App\Models\en_Team;
use App\Models\Message;
use App\Models\Product;
use App\Models\Section;
use App\Models\Service;
use App\Models\Setting;
use App\Models\en_About;
use App\Models\en_Slider;
use App\Models\Portfolio;
use App\Models\Statistic;
use App\Models\Background;
use App\Models\en_Comment;
use App\Models\en_Contact;
use App\Models\en_Product;
use App\Models\en_Service;
use App\Models\en_Portfolio;
use App\Models\en_Statistic;
use App\Models\Social_Media;
use Illuminate\Http\Request;
use App\Models\About_Element;
use Laravel\Ui\Presets\React;
use Hekmatinasser\Verta\Verta;
use App\Models\Sections_Setting;
use App\Models\en_about__element;
use App\Models\Footer_Information;
use App\Models\en_Company_Information;
use App\Models\en_footer__information;


class En_HomeController extends Controller
{

    

    public function __construct()
    {
        $this->color_base = Setting::where('name', 'color_base')->first('value');
        $this->en = Setting::where('name', 'english')->first('value');
        $this->fav = Setting::where('name', 'fav')->first('value');
        $this->title = Setting::where('name', 'title')->first();
        $this->description = Setting::where('name', 'description')->first();
        $this->information = en_Company_Information::orderBy('id', 'DESC')->get();
        $this->Social = Social_Media::orderBy('id', 'DESC')->get();
        $this->logo1 = Setting::where('name', 'logo_1')->first();
        $this->logo2 = Setting::where('name', 'logo_2')->first();
        $this->services = Section::where('name', 'services')->first();
        $this->statistics = Section::where('name', 'statistics')->first();
        $this->team = Section::where('name', 'team')->first();
        $this->plans = Section::where('name', 'plans')->first();
        $this->blog = Section::where('name', 'blog')->first();
        $this->random_product = Section::where('name', 'random_product')->first();
        $this->slider = Section::where('name', 'slider')->first();
        $this->services_information = Sections_Setting::where('name', 'services')->first();
        $this->team_information = Sections_Setting::where('name', 'team')->first();
        $this->plans_information = Sections_Setting::where('name', 'plans')->first();
        $this->blog_information = Sections_Setting::where('name', 'blog')->first();
        $this->random_product_information = Sections_Setting::where('name', 'random_product')->first();
        $this->count_team = Sections_Setting::where('name', 'team')->first();
        $this->count_plans = Sections_Setting::where('name', 'plans')->first();
        $this->count_blog = Sections_Setting::where('name', 'blog')->first();
        $this->count_services = Sections_Setting::where('name', 'services')->first();
        $this->services_ui = en_Service::orderBy('id', 'DESC')->get()->take($this->count_services->count);
        $this->team_ui = en_Team::orderBy('id', 'DESC')->get()->take($this->count_team->count);
        $this->plans_ui = en_Plan::orderBy('id', 'DESC')->get()->take($this->count_plans->count);
        $this->blog_ui = en_Blog::orderBy('id', 'DESC')->get()->take($this->count_blog->count);
        $this->slider_ui = en_Slider::orderBy('id', 'DESC')->get();
        $this->statistics_ui = en_Statistic::orderBy('id', 'DESC')->get();
        $this->statistics_bg = Background::where('name', 'statistics')->first();
        $this->count_post_footer = en_footer__information::where('id', '1')->first();
        $this->blog_footer = en_Blog::all()->random($this->count_post_footer->count_post);
        $this->item_menu = Section::where('type', 'page')->where('status', '1')->get();
        $this->cats_product = Cat::orderBy('id', 'DESC')->get();
        $this->portfolio_information = Sections_Setting::where('name', 'portfolio')->first();
        $this->portfolio_background = Background::where('name', 'portfolio')->first();
        $this->portfolio = en_Portfolio::orderBy('id', 'DESC')->get();
        $this->contact_information = Sections_Setting::where('name', 'contact')->first();
        $this->contact_background = Background::where('name', 'contact')->first();
        $this->contact = en_Contact::orderBy('id', 'DESC')->get();
        $this->about_information = Sections_Setting::where('name', 'about')->first();
        $this->about_background = Background::where('name', 'about')->first();
        $this->about_text = en_About::where('id', '1')->first();
        $this->About_Element = en_about__element::all();
        $this->blog_background = Background::where('name', 'blog')->first();
        $this->blogAll = en_Blog::orderBy('id', 'DESC')->get();
        if ($this->random_product->status == 1) {
            $this->random_product_ui = en_Product::all()->random(6);
        }
        $this->products_check = Section::where('name', 'products')->where('type', 'page')->first();
        $this->sevice_bg = Background::where('name','sevice_single')->first();
        $this->menus = en_Menu::orderBy('id','DESC')->get();
        $this->sub_blog = en_Blog::orderBy('id','DESC')->get();
        $this->sub_service = en_Service::orderBy('id','DESC')->get();
        $this->sub_product = en_Product::orderBy('id','DESC')->get();
        $this->sub_cat = en_Cat::orderBy('id','DESC')->get();
        $this->base_keyworlds =  Setting::where('name', 'keyworlds')->first();
        $this->link_whatsapp = Setting::where('name', 'link_whatsapp')->first();

    }

    public function index()
    {
        return view('en.index', [
            'base_keyworlds'=>$this->base_keyworlds,
            'sub_cat'=>$this->sub_cat,
            'sub_blog'=>$this->sub_blog,
            'link_whatsapp'=>$this->link_whatsapp,
            'sub_service'=>$this->sub_service,
            'sub_product'=>$this->sub_product,
            'menus'=>$this->menus,
            'products_check'=>$this->products_check->status,
            'random_product_ui' => $this->random_product_ui,
            'cats_product' => $this->cats_product,
            'item_menu' => $this->item_menu,
            'text_footer' => $this->count_post_footer->text,
            'copy_text_footer' => $this->count_post_footer->copy_text,
            'blog_footer' => $this->blog_footer,
            'color_base' => $this->color_base->value,
            'en' => $this->en->value,
            'fav' => $this->fav->value,
            'title' => $this->title->value_en,
            'description' => $this->description->value_en,
            'information' => $this->information,
            'Social' => $this->Social,
            'logo1' => $this->logo1->value,
            'logo2' => $this->logo2->value,
            'services' => $this->services->status,
            'statistics' => $this->statistics->status,
            'team' => $this->team->status,
            'plans' => $this->plans->status,
            'blog' => $this->blog->status,
            'random_product' => $this->random_product->status,
            'slider' => $this->slider->status,
            'blog_information' => $this->blog_information,
            'plans_information' => $this->plans_information,
            'team_information' => $this->team_information,
            'random_product_information' => $this->random_product_information,
            'services_information' => $this->services_information,
            'services_ui' => $this->services_ui,
            'team_ui' => $this->team_ui,
            'plans_ui' => $this->plans_ui,
            'blog_ui' => $this->blog_ui,
            'slider_ui' => $this->slider_ui,
            'statistics_ui' => $this->statistics_ui,
            'statistics_bg' => $this->statistics_bg,
        ]);
    }
    public function login()
    {
        return view('en.auth.login',[
            'color_base'=>$this->color_base->value,
        ]);
    }


    public function blog()
    {
        return view('en.blog', [
            'base_keyworlds'=>$this->base_keyworlds,
            'sub_cat'=>$this->sub_cat,
            'sub_blog'=>$this->sub_blog,
            'link_whatsapp'=>$this->link_whatsapp,
            'sub_service'=>$this->sub_service,
            'sub_product'=>$this->sub_product,
            'menus'=>$this->menus,
            'item_menu' => $this->item_menu,
            'text_footer' => $this->count_post_footer->text,
            'copy_text_footer' => $this->count_post_footer->copy_text,
            'blog_footer' => $this->blog_footer,
            'blog' => $this->blogAll,
            'services_ui' => $this->services_ui,
            'color_base' => $this->color_base->value,
            'en' => $this->en->value,
            'fav' => $this->fav->value,
            'cats_product' => $this->cats_product,
            'title' => $this->title->value,
            'description' => $this->description->value,
            'information' => $this->information,
            'Social' => $this->Social,
            'logo1' => $this->logo1->value,
            'logo2' => $this->logo2->value,
            'blog_background' => $this->blog_background->src,
        ]);
    }

    public function single($id)
    {
        $single = en_Blog::where('id', $id)->first();

        return view('en.single', [
            'base_keyworlds'=>$this->base_keyworlds,
            'sub_cat'=>$this->sub_cat,
            'sub_blog'=>$this->sub_blog,
            'sub_service'=>$this->sub_service,
            'link_whatsapp'=>$this->link_whatsapp,
            'sub_product'=>$this->sub_product,
            'menus'=>$this->menus,
            'item_menu' => $this->item_menu,
            'services_ui' => $this->services_ui,
            'text_footer' => $this->count_post_footer->text,
            'copy_text_footer' => $this->count_post_footer->copy_text,
            'blog_footer' => $this->blog_footer,
            'color_base' => $this->color_base->value,
            'en' => $this->en->value,
            'fav' => $this->fav->value,
            'cats_product' => $this->cats_product,
            'title' => $this->title->value,
            'description' => $this->description->value,
            'information' => $this->information,
            'Social' => $this->Social,
            'logo1' => $this->logo1->value,
            'logo2' => $this->logo2->value,
            'single' => $single,
        ]);
    }
    
    public function portfolio()
    {
        return view('en.portfolio', [
            'base_keyworlds'=>$this->base_keyworlds,
            'link_whatsapp'=>$this->link_whatsapp,
            'sub_cat'=>$this->sub_cat,
            'item_menu' => $this->item_menu,
            'sub_blog'=>$this->sub_blog,
            'sub_service'=>$this->sub_service,
            'sub_product'=>$this->sub_product,
            'menus'=>$this->menus,
            'text_footer' => $this->count_post_footer->text,
            'copy_text_footer' => $this->count_post_footer->copy_text,
            'services_ui' => $this->services_ui,
            'blog_footer' => $this->blog_footer,
            'portfolio' => $this->portfolio,
            'color_base' => $this->color_base->value,
            'en' => $this->en->value,
            'cats_product' => $this->cats_product,
            'fav' => $this->fav->value,
            'title' => $this->title->value,
            'description' => $this->description->value,
            'information' => $this->information,
            'Social' => $this->Social,
            'logo1' => $this->logo1->value,
            'logo2' => $this->logo2->value,
            'portfolio_information' => $this->portfolio_information,
            'portfolio_background' => $this->portfolio_background->src,
        ]);
    }

    
    public function categorys($id)
    {
        $cat = en_Cat::where('id',$id)->first();
        $products = en_Product::where('cat',$cat->name)->get();
        $bg_cat = Background::where('name','categorys')->first();
        return view('en.categorys', [
            'base_keyworlds'=>$this->base_keyworlds,
            'sub_cat'=>$this->sub_cat,
            'sub_blog'=>$this->sub_blog,
            'sub_service'=>$this->sub_service,
            'link_whatsapp'=>$this->link_whatsapp,
            'sub_product'=>$this->sub_product,
            'menus'=>$this->menus,
            'item_menu' => $this->item_menu,
            'text_footer' => $this->count_post_footer->text,
            'copy_text_footer' => $this->count_post_footer->copy_text,
            'blog_footer' => $this->blog_footer,
            'blog' => $this->blogAll,
            'services_ui' => $this->services_ui,
            'color_base' => $this->color_base->value,
            'en' => $this->en->value,
            'fav' => $this->fav->value,
            'cats_product' => $this->cats_product,
            'title' => $this->title->value,
            'description' => $this->description->value,
            'information' => $this->information,
            'Social' => $this->Social,
            'logo1' => $this->logo1->value,
            'logo2' => $this->logo2->value,
            'blog_background' => $this->blog_background->src,
            'products'=>$products,
            'cat_name'=>$cat->name,
            'bg_cat'=>$bg_cat->src,
        ]);
    }
    
    public function products()
    {
        $bg_cat = Background::where('name','categorys')->first();

        return view('en.products', [
            'base_keyworlds'=>$this->base_keyworlds,
            'sub_cat'=>$this->sub_cat,
            'sub_blog'=>$this->sub_blog,
            'sub_service'=>$this->sub_service,
            'link_whatsapp'=>$this->link_whatsapp,
            'sub_product'=>$this->sub_product,
            'menus'=>$this->menus,
            'item_menu' => $this->item_menu,
            'text_footer' => $this->count_post_footer->text,
            'copy_text_footer' => $this->count_post_footer->copy_text,
            'blog_footer' => $this->blog_footer,
            'blog' => $this->blogAll,
            'services_ui' => $this->services_ui,
            'color_base' => $this->color_base->value,
            'en' => $this->en->value,
            'fav' => $this->fav->value,
            'cats_product' => $this->cats_product,
            'title' => $this->title->value,
            'description' => $this->description->value,
            'information' => $this->information,
            'Social' => $this->Social,
            'logo1' => $this->logo1->value,
            'logo2' => $this->logo2->value,
            'blog_background' => $this->blog_background->src,
            'bg_cat'=>$bg_cat->src,
            'products'=>$this->sub_product,
        ]);
    }
    public function contact()
    {
        return view('en.contact', [
            'base_keyworlds'=>$this->base_keyworlds,
            'sub_cat'=>$this->sub_cat,
            'link_whatsapp'=>$this->link_whatsapp,
            'sub_blog'=>$this->sub_blog,
            'sub_service'=>$this->sub_service,
            'sub_product'=>$this->sub_product,
            'menus'=>$this->menus,
            'item_menu' => $this->item_menu,
            'text_footer' => $this->count_post_footer->text,
            'copy_text_footer' => $this->count_post_footer->copy_text,
            'blog_footer' => $this->blog_footer,
            'services_ui' => $this->services_ui,
            'contact' => $this->contact,
            'color_base' => $this->color_base->value,
            'en' => $this->en->value,
            'cats_product' => $this->cats_product,
            'fav' => $this->fav->value,
            'title' => $this->title->value,
            'description' => $this->description->value,
            'information' => $this->information,
            'Social' => $this->Social,
            'logo1' => $this->logo1->value,
            'logo2' => $this->logo2->value,
            'contact_information' => $this->contact_information,
            'contact_background' => $this->contact_background->src,
        ]);
    }
    public function single_product($id)
    {
        $list_comments = en_Comment::orderBy('id', 'DESC')->where('for', $id)->where('status', '1')->get();
        $single_product = en_Product::where('id', $id)->first();
        return view('en.single_product', [
            'base_keyworlds'=>$this->base_keyworlds,
            'sub_cat'=>$this->sub_cat,
            'sub_blog'=>$this->sub_blog,
            'sub_service'=>$this->sub_service,
            'sub_product'=>$this->sub_product,
            'menus'=>$this->menus,
            'list_comments' => $list_comments,
            'item_menu' => $this->item_menu,
            'text_footer' => $this->count_post_footer->text,
            'copy_text_footer' => $this->count_post_footer->copy_text,
            'link_whatsapp'=>$this->link_whatsapp,
            'blog_footer' => $this->blog_footer,
            'color_base' => $this->color_base->value,
            'services_ui' => $this->services_ui,
            'en' => $this->en->value,
            'fav' => $this->fav->value,
            'cats_product' => $this->cats_product,
            'title' => $this->title->value,
            'description' => $this->description->value,
            'information' => $this->information,
            'Social' => $this->Social,
            'logo1' => $this->logo1->value,
            'logo2' => $this->logo2->value,
            'single_product' => $single_product,
        ]);
    }
    
    public function services($id)
    {

        $services_single = en_Service::where('id', $id)->first();
        return view('en.services_single', [
            'base_keyworlds'=>$this->base_keyworlds,
            'sub_cat'=>$this->sub_cat,
            'sub_blog'=>$this->sub_blog,
            'sub_service'=>$this->sub_service,
            'sub_product'=>$this->sub_product,
            'menus'=>$this->menus,
            'item_menu' => $this->item_menu,
            'text_footer' => $this->count_post_footer->text,
            'copy_text_footer' => $this->count_post_footer->copy_text,
            'blog_footer' => $this->blog_footer,
            'link_whatsapp'=>$this->link_whatsapp,
            'color_base' => $this->color_base->value,
            'en' => $this->en->value,
            'services_ui' => $this->services_ui,
            'fav' => $this->fav->value,
            'cats_product' => $this->cats_product,
            'title' => $this->title->value,
            'description' => $this->description->value,
            'information' => $this->information,
            'Social' => $this->Social,
            'logo1' => $this->logo1->value,
            'logo2' => $this->logo2->value,
            'services_single' => $services_single,
            'sevice_bg'=>$this->sevice_bg->src,
        ]);
    }
    public function comment(Request $request)
    {
        $v = verta();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'text' => 'required|string',
        ]);
        en_Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text,
            'for' => $request->for,
            'status' => '0',
            'date_fa' =>  date('Y-m-d'),

        ]);

        alert()->Success('', 'Thanks, your comment has been submitted')->persistent('OK');
        return redirect()->back();
    }

    
    public function about()
    {
        return view('en.about', [
            'base_keyworlds'=>$this->base_keyworlds,
            'sub_cat'=>$this->sub_cat,
            'sub_blog'=>$this->sub_blog,
            'sub_service'=>$this->sub_service,
            'sub_product'=>$this->sub_product,
            'link_whatsapp'=>$this->link_whatsapp,
            'menus'=>$this->menus,
            'item_menu' => $this->item_menu,
            'text_footer' => $this->count_post_footer->text,
            'copy_text_footer' => $this->count_post_footer->copy_text,
            'blog_footer' => $this->blog_footer,
            'about_text' => $this->about_text->text,
            'About_Element' => $this->About_Element,
            'color_base' => $this->color_base->value,
            'en' => $this->en->value,
            'services_ui' => $this->services_ui,
            'cats_product' => $this->cats_product,
            'fav' => $this->fav->value,
            'title' => $this->title->value,
            'description' => $this->description->value,
            'information' => $this->information,
            'Social' => $this->Social,
            'logo1' => $this->logo1->value,
            'logo2' => $this->logo2->value,
            'about_information' => $this->about_information,
            'about_background' => $this->about_background->src,
        ]);
    }

}
