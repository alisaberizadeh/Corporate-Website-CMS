<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\About_Element;
use App\Models\Background;
use App\Models\Blog;
use App\Models\Cat;
use App\Models\Comment;
use App\Models\Plan;
use App\Models\Team;
use App\Models\Section;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Social_Media;
use Illuminate\Http\Request;
use App\Models\Sections_Setting;
use App\Models\Company_Information;
use App\Models\Contact;
use App\Models\Footer_Information;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Statistic;
use Laravel\Ui\Presets\React;
use Hekmatinasser\Verta\Verta;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->color_base = Setting::where('name', 'color_base')->first('value');
        $this->en = Setting::where('name', 'english')->first('value');
        $this->fav = Setting::where('name', 'fav')->first('value');
        $this->title = Setting::where('name', 'title')->first('value');
        $this->description = Setting::where('name', 'description')->first('value');
        $this->information = Company_Information::all();
        $this->Social = Social_Media::all();
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
        $this->services_ui = Service::orderBy('id', 'DESC')->get()->take($this->count_services->count);
        $this->team_ui = Team::orderBy('id', 'DESC')->get()->take($this->count_team->count);
        $this->plans_ui = Plan::orderBy('id', 'DESC')->get()->take($this->count_plans->count);
        $this->blog_ui = Blog::orderBy('id', 'DESC')->get()->take($this->count_blog->count);
        $this->slider_ui = Slider::orderBy('id', 'DESC')->get();
        $this->statistics_ui = Statistic::orderBy('id', 'DESC')->get();
        $this->statistics_bg = Background::where('name', 'statistics')->first();
        $this->count_post_footer = Footer_Information::where('id', '1')->first();
        $this->blog_footer = Blog::all()->random($this->count_post_footer->count_post);
        $this->item_menu = Section::where('type', 'page')->where('status', '1')->get();
        $this->cats_product = Cat::orderBy('id', 'DESC')->get();
        $this->portfolio_information = Sections_Setting::where('name', 'portfolio')->first();
        $this->portfolio_background = Background::where('name', 'portfolio')->first();
        $this->portfolio = Portfolio::orderBy('id', 'DESC')->get();
        $this->contact_information = Sections_Setting::where('name', 'contact')->first();
        $this->contact_background = Background::where('name', 'contact')->first();
        $this->contact = Contact::orderBy('id', 'DESC')->get();
        $this->about_information = Sections_Setting::where('name', 'about')->first();
        $this->about_background = Background::where('name', 'about')->first();
        $this->about_text = About::where('id', '1')->first();
        $this->About_Element = About_Element::all();
        $this->blog_background = Background::where('name', 'blog')->first();
        $this->blogAll = Blog::orderBy('id', 'DESC')->get();
        if ($this->random_product->status == 1) {
            $this->random_product_ui = Product::all()->random(6);
        }
        $this->products_check = Section::where('name', 'products')->where('type', 'page')->first();
        $this->sevice_bg = Background::where('name','sevice_single')->first();
        $this->menus = Menu::orderBy('id','DESC')->get();
        $this->sub_blog = Blog::orderBy('id','DESC')->get();
        $this->sub_service = Service::orderBy('id','DESC')->get();
        $this->sub_product = Product::orderBy('id','DESC')->get();
        $this->sub_cat = Cat::orderBy('id','DESC')->get();
        $this->base_keyworlds =  Setting::where('name', 'keyworlds')->first();
        $this->link_whatsapp = Setting::where('name', 'link_whatsapp')->first();
    }
    
    public function index()
    {
        return view('index', [
            'link_whatsapp'=>$this->link_whatsapp,
            'base_keyworlds'=>$this->base_keyworlds,
            'sub_cat'=>$this->sub_cat,
            'sub_blog'=>$this->sub_blog,
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
            'title' => $this->title->value,
            'description' => $this->description->value,
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
    public function portfolio()
    {
        return view('portfolio', [
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
    public function contact()
    {
        return view('contact', [
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
    public function about()
    {
        return view('about', [
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
    public function blog()
    {
        return view('blog', [
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
    public function products()
    {
        $bg_cat = Background::where('name','categorys')->first();

        return view('products', [
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
    public function single($id)
    {
        $single = Blog::where('id', $id)->first();

        return view('single', [
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

    public function single_product($id)
    {
        $list_comments = Comment::orderBy('id', 'DESC')->where('for', $id)->where('status', '1')->get();
        $single_product = Product::where('id', $id)->first();
        return view('single_product', [
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

        $services_single = Service::where('id', $id)->first();
        return view('services_single', [
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
        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text,
            'for' => $request->for,
            'status' => '0',
            'date_fa' => $v->format('d %B Y'),

        ]);

        alert()->Success('', 'متشکریم ، نظر شما ثبت شد')->persistent('باشه');
        return redirect()->back();
    }

    public function repair()
    {
        return view('repair');
    }

    public function categorys($id)
    {
        $cat = Cat::where('id',$id)->first();
        $products = Product::where('cat',$cat->name)->get();
        $bg_cat = Background::where('name','categorys')->first();
        return view('categorys', [
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


}
