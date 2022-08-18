<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ادمین | داشبورد</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('/images/avatar/avatar.png') }}">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/bootstrap-rtl.min.css') }}">
    <script src="{{ asset('/js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/admin/adminlte.min.js') }}"></script>
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>

</head>

<body class="hold-transition sidebar-mini">
    @include('sweet::alert')
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">خانه</a>
                </li>
            </ul>


            <ul class="navbar-nav mr-auto">

                <li class="nav-item ">
                    <a class="nav-link" onclick="event.preventDefault();document.getElementById('deleteForm').submit()"
                        data-toggle="dropdown" href="/logout">
                        <i class="fa fa-power-off"></i>
                    </a>
                    <form action="{{ route('logout') }}" method="POST" id="deleteForm">@csrf</form>

                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">


            <div class="sidebar">
                <div>
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset('/images/avatar/avatar.png') }}" class="img-circle elevation-2"
                                alt="User Image">
                        </div>
                        <div class="info">
                            <h5 class="d-block text-light"><strong>{{ auth()->user()->name }}</strong> <br>

                            </h5>

                        </div>
                    </div>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="{{ route('me') }}" class="nav-link">
                                    <i class="nav-icon fa fa-user-o"></i>
                                    <p>
                                        اطلاعات من

                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-cogs"></i>
                                    <p>
                                        تنظیمات
                                        <i class="fa fa-angle-left right"></i>

                                    </p>
                                </a>
                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="{{ route('setting') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>تنظیمات اصلی</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                تنظیمات بخش ها
                                                <i class="fa fa-angle-left right"></i>
                                            </p>

                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('sections.categorys.single') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>بخش دسته بندی</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('sections.services.single') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>بخش توضیح سرویس</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('sections.services') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>بخش خدمات</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('sections.team') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>بخش تیم</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('sections.plans') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>بخش طرح ها و قیمت</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('sections.blog') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p> بخش مقالات </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('sections.portfolio') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p> بخش نمونه کار</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('sections.contact') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p> بخش تماس باما </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('sections.about') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p> بخش درباره ما </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('sections.blog.page') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p> بخش بلاگ </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('sections.random_product') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p> بخش محصولات رندوم </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="nav-item has-treeview">
                                        <a href="{{ route('sections') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                مدیریت بخش بندی
                                            </p>
                                        </a>
                                    </li>
        
                                    <li class="nav-item has-treeview">
                                        <a href="{{ route('pages') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                مدیریت صفحات
                                            </p>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-paint-brush"></i>
                                    <p>
                                        نمایش
                                        <i class="fa fa-angle-left right"></i>
                                    </p>

                                </a>
                                <ul class="nav nav-treeview">
                                   
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                تیم ما
                                                <i class="fa fa-angle-left right"></i>
                                            </p>
        
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('team.new') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>افزودن عضو جدید</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('team') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>مدیریت تیم ها</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
        
                                    <li class="nav-item has-treeview">
                                        <a href="{{ route('statistics') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                آمار
                                            </p>
                                        </a>
                                    </li>


                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                خدمات
                                                <i class="fa fa-angle-left right"></i>
                                            </p>
        
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('services.new') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>افزودن آیتم جدید</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('services') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>مدیریت سرویس ها</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
        
        
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                طرح ها
                                                <i class="fa fa-angle-left right"></i>
                                            </p>
        
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('plans.new') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>افزودن طرح جدید</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('plans') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>مدیریت طرح ها</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
        
        
        
                                    <li class="nav-item has-treeview">
                                        <a href="{{ route('contact') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                تماس باما
                                            </p>
                                        </a>
                                    </li>
        
                                 
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                درباره ما
                                                <i class="fa fa-angle-left right"></i>
                                            </p>
        
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('about') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>ویرایش متن</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('about.elements') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p> عناصر درباره ما</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="{{ route('menus') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                منو
                                            </p>
        
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="{{ route('footer') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                فوتر
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                اسلایدر
                                                <i class="fa fa-angle-left right"></i>
                                            </p>
        
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('slider.new') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>افزودن اسلاید جدید</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('slider') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>مدیریت اسلایدر</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>



                                </ul>
                            </li>

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-flag"></i>
                                    <p>
                                        شرکت
                                        <i class="fa fa-angle-left right"></i>
                                    </p>

                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="{{ route('information') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                اطلاعات شرکت
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item has-treeview">
                                        <a href="{{ route('social') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                شبکه های اجتماعی
                                            </p>
                                        </a>
                                    </li>
        
                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                نمونه کار
                                                <i class="fa fa-angle-left right"></i>
                                            </p>
        
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ route('portfolio.new') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>افزودن نمونه کار جدید</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('portfolio') }}" class="nav-link">
                                                    <i class="fa fa-genderless nav-icon"></i>
                                                    <p>مدیریت نمونه کار</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
        
                                </ul>
                            </li>


                            

                           
                            


                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-file"></i>
                                    <p>
                                        مقالات
                                        <i class="fa fa-angle-left right"></i>
                                    </p>

                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('blog.new') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>افزودن مقاله جدید</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('blog') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>مدیریت مقالات</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                           

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-image"></i>
                                    <p>
                                        محصولات
                                        <i class="fa fa-angle-left right"></i>
                                    </p>

                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('products.new') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>افزودن محصول جدید</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('products') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>مدیریت محصولات</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="{{ route('Categorys') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>
                                                دسته بندی
                                            </p>
                                        </a>
                                    </li>
                                 
                                </ul>
                            </li>






                            <li class="nav-item has-treeview">
                                <a href="{{ route('comments') }}" class="nav-link">
                                    <i class="nav-icon fa fa-comments "></i>
                                    <p>
                                        نظرات
                                    </p>
                                </a>
                            </li>

                          

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-users"></i>
                                    <p>
                                        مدیران
                                        <i class="fa fa-angle-left right"></i>
                                    </p>

                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('users.new') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>افزودن مدیر جدید</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('users') }}" class="nav-link">
                                            <i class="fa fa-genderless nav-icon"></i>
                                            <p>مدیریت </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>



                        </ul>
                    </nav>
                </div>
            </div>
        </aside>


        <div class="content-wrapper">
            @yield('content')
        </div>







    </div>

    <p class="text-left pl-2 text-light">Version 2.0</p>

</body>

</html>
