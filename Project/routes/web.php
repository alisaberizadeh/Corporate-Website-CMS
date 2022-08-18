<?php

use App\Models\Section;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\En_HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\dashboard\blogController;
use App\Http\Controllers\dashboard\teamController;
use App\Http\Controllers\dashboard\userController;
use App\Http\Controllers\dashboard\aboutController;
use App\Http\Controllers\dashboard\plansController;
use App\Http\Controllers\dashboard\footerController;
use App\Http\Controllers\dashboard\sliderController;
use App\Http\Controllers\dashboard\socialController;
use App\Http\Controllers\dashboard\companyController;
use App\Http\Controllers\dashboard\contactController;
use App\Http\Controllers\dashboard\settingController;
use App\Http\Controllers\dashboard\commentsController;
use App\Http\Controllers\dashboard\productsController;
use App\Http\Controllers\dashboard\sectionsController;
use App\Http\Controllers\dashboard\servicesController;
use App\Http\Controllers\dashboard\categorysController;
use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\dashboard\menuController;
use App\Http\Controllers\dashboard\portfolioController;
use App\Http\Controllers\dashboard\statisticsController;
use App\Http\Controllers\dashboard\sectionsSettingController;
use App\Http\Controllers\SitemapController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/register', function () {
    return redirect()->route('login');
});
Route::get('/password/reset', function () {
    return redirect()->route('login');
});
Route::get('/password/reset/{token}', function () {
    return redirect()->route('login');
});
Route::get('/password/confirm', function () {
    return redirect()->route('login');
});

Route::get('/repair', [HomeController::class, 'repair']);
Route::get('/', [HomeController::class, 'index'])->middleware('repairMode');

Route::get('/sitemap.xml', [SitemapController::class , 'index']);
Route::get('/sitemap.xml/blog',[SitemapController::class , 'blog']);
Route::get('/sitemap.xml/products',[SitemapController::class , 'products']);
Route::get('/sitemap.xml/questions', 'SitemapController@questions');


$page_check_portfolio = Section::where('name', 'portfolio')->where('type', 'page')->first();
if ($page_check_portfolio->status == 1) {
    Route::get('/portfolio', [HomeController::class, 'portfolio'])->middleware('repairMode');
}
$contact_check = Section::where('name', 'contact')->where('type', 'page')->first();
if ($contact_check->status == 1) {
    Route::get('/contact', [HomeController::class, 'contact'])->middleware('repairMode');
}
$about_check = Section::where('name', 'about')->where('type', 'page')->first();
if ($about_check->status == 1) {
    Route::get('/about', [HomeController::class, 'about'])->middleware('repairMode');
}
$blog_check = Section::where('name', 'blog')->where('type', 'page')->first();
if ($blog_check->status == 1) {
    Route::get('/blog', [HomeController::class, 'blog'])->middleware('repairMode');
    Route::get('/blog/{id}/', [HomeController::class, 'single'])->middleware('repairMode')->name('articles.single');
}
$products_check = Section::where('name', 'products')->where('type', 'page')->first();
if ($products_check->status == 1) {
    Route::get('/products', [HomeController::class, 'products'])->middleware('repairMode')->name('products');
    Route::get('/products/{id}', [HomeController::class, 'single_product'])->middleware('repairMode')->name('product_single');
    Route::post('/product/comment', [HomeController::class, 'comment'])->middleware('repairMode')->name('comment');
}
$services_check = Section::where('name', 'services')->where('type', 'page')->first();
if ($services_check->status == 1) {
    Route::get('/services/{id}', [HomeController::class, 'services'])->middleware('repairMode')->name('services_single');
}
$cats_check = Section::where('name', 'categorys')->where('type', 'page')->first();
if ($cats_check->status == 1) {
    Route::get('/categorys/{id}/', [HomeController::class, 'categorys'])->middleware('repairMode')->name('categorys.p');
}



Route::get('en/login', [En_HomeController::class, 'login'])->middleware('guest', 'enCheck')->name('en.login');
Route::prefix('/en')->middleware('enCheck', 'repairMode')->group(function () {
    Route::get('/', [En_HomeController::class, 'index'])->name('en');

    $page_check_portfolio = Section::where('name', 'portfolio')->where('type', 'page')->first();
    if ($page_check_portfolio->status == 1) {
        Route::get('/portfolio', [En_HomeController::class, 'portfolio'])->name('en.portfolio');
    }
    $blog_check = Section::where('name', 'blog')->where('type', 'page')->first();
    if ($blog_check->status == 1) {
        Route::get('/blog', [En_HomeController::class, 'blog'])->name('en.blog');
        Route::get('/blog/{id}', [En_HomeController::class, 'single'])->name('en.single');
    }

    $cats_check = Section::where('name', 'categorys')->where('type', 'page')->first();
    if ($cats_check->status == 1) {
        Route::get('/categorys/{id}/', [En_HomeController::class, 'categorys'])->name('en.categorys.p');
    }

    $products_check = Section::where('name', 'products')->where('type', 'page')->first();
    if ($products_check->status == 1) {
        Route::get('/products', [En_HomeController::class, 'products'])->name('en.product_single');
        Route::get('/products/{id}', [En_HomeController::class, 'single_product'])->name('en.product_single');
        Route::post('/product/comment', [En_HomeController::class, 'comment'])->name('en.comment');
    }
    $services_check = Section::where('name', 'services')->where('type', 'page')->first();
    if ($services_check->status == 1) {
        Route::get('/services/{id}', [En_HomeController::class, 'services'])->name('en.services_single');
    }
    $about_check = Section::where('name', 'about')->where('type', 'page')->first();
    if ($about_check->status == 1) {
        Route::get('/about', [En_HomeController::class, 'about']);
    }

    $contact_check = Section::where('name', 'contact')->where('type', 'page')->first();
    if ($contact_check->status == 1) {
        Route::get('/contact', [En_HomeController::class, 'contact']);
    }
});








Route::prefix('/dashboard')->middleware('checkLevel', 'auth')->group(function () {
    Route::get('/', [dashboardController::class, 'index'])->name('me');

    Route::put('/me/{id}/update', [dashboardController::class, 'update'])->name('me.update');

    Route::get('/setting', [settingController::class, 'index'])->name('setting');
    Route::put('/setting/base', [settingController::class, 'base'])->name('setting.base');
    Route::put('/setting/en/base', [settingController::class, 'en_base'])->name('setting.base.en');
    Route::put('/setting/logo1', [settingController::class, 'logo1'])->name('setting.logo1');
    Route::put('/setting/logo2', [settingController::class, 'logo2'])->name('setting.logo2');

    Route::get('/information', [companyController::class, 'index'])->name('information');
    Route::put('/information/update', [companyController::class, 'update'])->name('information.update');
    Route::get('/information/{id}/hide/', [companyController::class, 'hide'])->name('information.hide');
    Route::get('/information/{id}/show/', [companyController::class, 'show'])->name('information.show');
    Route::get('/information/{id}/hide/en', [companyController::class, 'en_hide'])->name('information.hide');
    Route::get('/information/{id}/show/en', [companyController::class, 'en_show'])->name('information.show');
    Route::put('/information/update/en', [companyController::class, 'en_update'])->name('information.update.en');

    Route::get('/social', [socialController::class, 'index'])->name('social');
    Route::put('/social/update', [socialController::class, 'update'])->name('social.update');
    Route::get('/social/{id}/hide', [socialController::class, 'hide'])->name('social.hide');
    Route::get('/social/{id}/show', [socialController::class, 'show'])->name('social.show');

    Route::get('/sections', [sectionsController::class, 'index'])->name('sections');
    Route::get('/sections/{id}/hide', [sectionsController::class, 'hide'])->name('sections.hide');
    Route::get('/sections{id}/show', [sectionsController::class, 'show'])->name('sections.show');

    Route::get('/pages', [sectionsController::class, 'pages'])->name('pages');

    Route::get('/sections/services', [sectionsSettingController::class, 'services'])->name('sections.services');
    Route::put('/sections/services/{id}/update', [sectionsSettingController::class, 'services_update'])->name('sections.services.update');
    Route::get('/sections/team', [sectionsSettingController::class, 'team'])->name('sections.team');
    Route::put('/sections/team/{id}/update', [sectionsSettingController::class, 'team_update'])->name('sections.team.update');
    Route::get('/sections/plans', [sectionsSettingController::class, 'plans'])->name('sections.plans');
    Route::put('/sections/plans/{id}/update', [sectionsSettingController::class, 'plans_update'])->name('sections.plans.update');
    Route::get('/sections/blog', [sectionsSettingController::class, 'blog'])->name('sections.blog');
    Route::put('/sections/blog/{id}/update', [sectionsSettingController::class, 'blog_update'])->name('sections.blog.update');
    Route::get('/sections/portfolio', [sectionsSettingController::class, 'portfolio'])->name('sections.portfolio');
    Route::put('/sections/portfolio/{id}/update', [sectionsSettingController::class, 'portfolio_update'])->name('sections.portfolio.update');
    Route::get('/sections/contact', [sectionsSettingController::class, 'contact'])->name('sections.contact');
    Route::put('/sections/contact/{id}/update', [sectionsSettingController::class, 'contact_update'])->name('sections.contact.update');
    Route::get('/sections/about', [sectionsSettingController::class, 'about'])->name('sections.about');
    Route::put('/sections/about/{id}/update', [sectionsSettingController::class, 'about_update'])->name('sections.about.update');
    Route::get('/sections/page/blog', [sectionsSettingController::class, 'blog_page'])->name('sections.blog.page');
    Route::put('/sections/page/blog/update', [sectionsSettingController::class, 'blog_page_update'])->name('sections.blog.page.update');

    Route::get('/sections/services/single', [sectionsSettingController::class, 'services_single'])->name('sections.services.single');
    Route::put('/sections/services/single/{id}/update', [sectionsSettingController::class, 'services_single_update'])->name('sections.srvices.single.update');

    Route::get('/sections/categorys', [sectionsSettingController::class, 'categorys_single'])->name('sections.categorys.single');
    Route::put('/sections/categorys/{id}/update', [sectionsSettingController::class, 'categorys_update'])->name('sections.categorys.single.update');


    Route::get('/sections/random_product', [sectionsSettingController::class, 'random_product'])->name('sections.random_product');
    Route::put('/sections/random_product/{id}/update', [sectionsSettingController::class, 'random_product_update'])->name('sections.random_product.update');

    Route::get('/services', [servicesController::class, 'index'])->name('services');
    Route::get('/services/new', [servicesController::class, 'new'])->name('services.new');
    Route::post('/services/new', [servicesController::class, 'create'])->name('services.create');
    Route::post('/services/en/new', [servicesController::class, 'en_create'])->name('services.create.en');
    Route::get('/services/{id}/delete', [servicesController::class, 'delete'])->name('services.delete');
    Route::get('/services/{id}/edit', [servicesController::class, 'edit'])->name('services.edit');
    Route::put('/services/{id}/update', [servicesController::class, 'update'])->name('services.update');
    Route::get('/services/en/{id}/edit', [servicesController::class, 'en_edit'])->name('services.edit.en');
    Route::put('/services/en/{id}/update', [servicesController::class, 'en_update'])->name('services.update.en');

    Route::get('/team', [teamController::class, 'index'])->name('team');
    Route::get('/team/new', [teamController::class, 'new'])->name('team.new');
    Route::post('/team/create', [teamController::class, 'create'])->name('team.create');
    Route::post('/team/en/create', [teamController::class, 'en_create'])->name('team.create.en');
    Route::get('/team/{id}/delete', [teamController::class, 'delete'])->name('team.delete');
    Route::get('/team/{id}/edit', [teamController::class, 'edit'])->name('team.edit');
    Route::put('/team/{id}/update', [teamController::class, 'update'])->name('team.update');
    Route::get('/team/{id}/en/delete', [teamController::class, 'en_delete'])->name('team.delete.en');
    Route::get('/team/{id}/en/edit', [teamController::class, 'en_edit'])->name('team.edit.en');
    Route::put('/team/{id}/en/update', [teamController::class, 'en_update'])->name('team.update.en');

    Route::get('/plans', [plansController::class, 'index'])->name('plans');
    Route::get('/plans/new', [plansController::class, 'new'])->name('plans.new');
    Route::post('/plans/create', [plansController::class, 'create'])->name('plans.create');
    Route::post('/plans/en/create', [plansController::class, 'en_create'])->name('plans.create.en');
    Route::get('/plans/{id}/delete', [plansController::class, 'delete'])->name('plans.delete');
    Route::get('/plans/{id}/edit', [plansController::class, 'edit'])->name('plans.edit');
    Route::put('/plans/{id}/update', [plansController::class, 'update'])->name('plans.update');
    Route::get('/plans/{id}/en/delete', [plansController::class, 'en_delete'])->name('plans.delete.en');
    Route::get('/plans/{id}/en/edit', [plansController::class, 'en_edit'])->name('plans.edit.en');
    Route::put('/plans/{id}/en/update', [plansController::class, 'en_update'])->name('plans.update.en');

    Route::get('/blog', [blogController::class, 'index'])->name('blog');
    Route::get('/blog/new', [blogController::class, 'new'])->name('blog.new');
    Route::post('/blog/create', [blogController::class, 'create'])->name('blog.create');
    Route::get('/blog/{id}/delete', [blogController::class, 'delete'])->name('blog.delete');
    Route::get('/blog/{id}/edit', [blogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{id}/update', [blogController::class, 'update'])->name('blog.update');
    Route::post('/blog/en/create', [blogController::class, 'en_create'])->name('blog.create.en');
    Route::get('/blog/{id}/en/delete', [blogController::class, 'en_delete'])->name('blog.delete.en');
    Route::get('/blog/{id}/en/edit', [blogController::class, 'en_edit'])->name('blog.edit.en');
    Route::put('/blog/{id}/en/update', [blogController::class, 'en_update'])->name('blog.update.en');


    Route::get('/slider', [sliderController::class, 'index'])->name('slider');
    Route::get('/slider/new', [sliderController::class, 'new'])->name('slider.new');
    Route::post('/slider/create', [sliderController::class, 'create'])->name('slider.create');
    Route::get('/slider/{id}/delete', [sliderController::class, 'delete'])->name('slider.delete');
    Route::get('/slider/{id}/edit', [sliderController::class, 'edit'])->name('slider.edit');
    Route::put('/slider/{id}/update', [sliderController::class, 'update'])->name('slider.update');
    Route::post('/slider/create/en', [sliderController::class, 'en_create'])->name('slider.create.en');

    Route::get('/slider/{id}/en/delete', [sliderController::class, 'en_delete'])->name('slider.delete.en');
    Route::get('/slider/{id}/en/edit', [sliderController::class, 'en_edit'])->name('slider.edit.en');
    Route::put('/slider/{id}/en/update', [sliderController::class, 'en_update'])->name('slider.update.en');


    Route::get('/statistics', [statisticsController::class, 'index'])->name('statistics');
    Route::put('/statistics/update', [statisticsController::class, 'update'])->name('statistics.update');
    Route::put('/statistics/en/update', [statisticsController::class, 'en_update'])->name('statistics.update.en');
    Route::put('/statistics/background/update', [statisticsController::class, 'background_update'])->name('statistics.background.update');
    Route::get('/statistics/{id}/show', [statisticsController::class, 'show'])->name('statistics.show');
    Route::get('/statistics/{id}/hide', [statisticsController::class, 'hide'])->name('statistics.hide');
    Route::get('/statistics/{id}/en/show', [statisticsController::class, 'en_show'])->name('statistics.show.en');
    Route::get('/statistics/{id}/en/hide', [statisticsController::class, 'en_hide'])->name('statistics.hide.en');

    Route::get('/portfolio', [portfolioController::class, 'index'])->name('portfolio');
    Route::get('/portfolio/new', [portfolioController::class, 'new'])->name('portfolio.new');
    Route::post('/portfolio/create', [portfolioController::class, 'create'])->name('portfolio.create');
    Route::get('/portfolio/{id}/delete', [portfolioController::class, 'delete'])->name('portfolio.delete');
    Route::get('/portfolio/{id}/edit', [portfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio/{id}/update', [portfolioController::class, 'update'])->name('portfolio.update');
    Route::post('/portfolio/en/create', [portfolioController::class, 'en_create'])->name('portfolio.create.en');
    Route::get('/portfolio/{id}/en/delete', [portfolioController::class, 'en_delete'])->name('portfolio.delete.en');
    Route::get('/portfolio/{id}/en/edit', [portfolioController::class, 'en_edit'])->name('portfolio.edit.en');
    Route::put('/portfolio/{id}/en/update', [portfolioController::class, 'en_update'])->name('portfolio.update.en');


    Route::get('/contact', [contactController::class, 'index'])->name('contact');
    Route::put('/contact/update', [contactController::class, 'update'])->name('contact.update');
    Route::put('/contact/en/update', [contactController::class, 'en_update'])->name('contact.update.en');
    Route::put('/contact/background/update', [contactController::class, 'background_update'])->name('contact.background.update');


    Route::get('/about', [aboutController::class, 'index'])->name('about');
    Route::put('/about/update', [aboutController::class, 'update'])->name('about.update');
    Route::get('/about/elements', [aboutController::class, 'elements'])->name('about.elements');
    Route::put('/about/elements/update', [aboutController::class, 'elements_update'])->name('about.elements.update');
    Route::put('/about/en/update', [aboutController::class, 'en_update'])->name('about.update.en');
    Route::get('/about/en/elements', [aboutController::class, 'en_elements'])->name('about.elements.en');
    Route::put('/about/en/elements/update', [aboutController::class, 'en_elements_update'])->name('about.elements.update.en');

    Route::get('/footer', [footerController::class, 'index'])->name('footer');
    Route::put('/footer/update', [footerController::class, 'update'])->name('footer.update');
    Route::put('/footer/en/update', [footerController::class, 'en_update'])->name('footer.update.en');

    Route::get('/users', [userController::class, 'index'])->name('users');
    Route::get('/users/new', [userController::class, 'new'])->name('users.new');
    Route::post('/users/create', [userController::class, 'create'])->name('users.create');
    Route::get('/users/{id}/delete', [userController::class, 'delete'])->name('users.delete');

    Route::get('/categorys', [categorysController::class, 'index'])->name('Categorys');
    Route::get('/categorys/{id}/delete', [categorysController::class, 'delete'])->name('Categorys.delete');
    Route::post('/categorys/create', [categorysController::class, 'create'])->name('Categorys.create');
    Route::get('/categorys/{id}/en/delete', [categorysController::class, 'en_delete'])->name('Categorys.delete.en');
    Route::post('/categorys/en/create', [categorysController::class, 'en_create'])->name('Categorys.create.en');

    Route::get('/products', [productsController::class, 'index'])->name('products');
    Route::get('/products/new', [productsController::class, 'new'])->name('products.new');
    Route::post('/products/new', [productsController::class, 'create'])->name('products.create');
    Route::post('/products/en/new', [productsController::class, 'en_create'])->name('products.create.en');
    Route::get('/products/{id}/delete', [productsController::class, 'delete'])->name('products.delete');
    Route::get('/products/{id}/edit', [productsController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}/update', [productsController::class, 'update'])->name('products.update');
    Route::get('/products/{id}/en/delete', [productsController::class, 'en_delete'])->name('products.delete.en');
    Route::get('/products/{id}/en/edit', [productsController::class, 'en_edit'])->name('products.edit.en');
    Route::put('/products/{id}/en/update', [productsController::class, 'en_update'])->name('products.update.en');

    Route::get('/comments', [commentsController::class, 'index'])->name('comments');
    Route::get('/comments/{id}/active', [commentsController::class, 'active'])->name('comments.active');
    Route::get('/comments/{id}/Noactive', [commentsController::class, 'Noactive'])->name('comments.Noactive');
    Route::get('/comments/{id}/en/active', [commentsController::class, 'en_active'])->name('comments.active.en');
    Route::get('/comments/{id}/en/Noactive', [commentsController::class, 'en_Noactive'])->name('comments.Noactive.en');

    Route::get('/menus', [menuController::class, 'index'])->name('menus');
    Route::post('/menus/create', [menuController::class, 'create'])->name('menus.create');
    Route::get('/menus/{id}/edit', [menuController::class, 'edit'])->name('menus.edit');
    Route::put('/menus/{id}/update', [menuController::class, 'update'])->name('menus.update');
    Route::get('/menus/{id}/delete', [menuController::class, 'delete'])->name('menus.delete');
    Route::post('/menus/en/create', [menuController::class, 'en_create'])->name('menus.create.en');
    Route::get('/menus/{id}/en/edit', [menuController::class, 'en_edit'])->name('menus.edit.en');
    Route::put('/menus/{id}/en/update', [menuController::class, 'en_update'])->name('menus.update.en');
    Route::get('/menus/{id}/en/delete', [menuController::class, 'en_delete'])->name('menus.delete.en');
});
