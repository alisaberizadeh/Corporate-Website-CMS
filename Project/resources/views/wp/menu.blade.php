@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1> منو </h1>
                </div>

            </div>
        </div>
        <div class="alert alert-info col-lg-4">
            لینک های قابل استفاده : 
            <strong dir="ltr" class="text-left">
                <ul>
                    <li> / </li>
                    <li> portfolio </li>
                    <li> contact </li>
                    <li> about </li>
                    <li> blog </li>
                    <li> blog / (post_id) </li>
                    <li> products </li>
                    <li> product / (product_id) </li>
                    <li> services / (services_id) </li>
                </ul>
            </strong>
        </div>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

           


            <div class="card card-primary p-0 mt-3 ml-4 col-lg-4" style="overflow: hidden">
                <form action="{{ route('menus.create') }}" method="POST" enctype="multipart/form-data"> @csrf
                    <div class="card-header ">
                        <h3 class="card-title"> افزودن آیتم به منو </h3>
                    </div>
 
                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> * عنوان </label>
                            <input type="text" class="form-control" name="title" value="{{ old('name') }}" required>
                        </div>

                   

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> * لینک </label>
                            <input type="text" class="form-control" dir="ltr" name="link" value="{{ old('link') }}"
                                placeholder="example" required>
                                
                        </div>
                        
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> زیر منو </label>
                                <select name="sub" class="form-control">
                                    <option value="">--- انتخاب کنید ---</option>
                                    <option value="Blog">مقالات</option>
                                    <option value="Service">خدمات</option>
                                    <option value="Product">محصولات</option>
                                    <option value="Cat">دسته بندی ها</option>
                                </select>
                        </div>


                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> تعداد نمایش زیر منو </label>
                            <input type="number" class="form-control" name="count" value=" {{ old('link') }} "
                                placeholder="">
                        </div>
                        

                        <button class="btn btn-warning col-lg-2 mt-4">ثبت</button>
                    </div>
                </form>

            </div>


            <div class="card card-primary p-0 mt-3 col-lg-7">
                <div class="card-header">
                    <h3 class="card-title"> لیست منو</h3>
                </div>

                <div class="card-body row">

                   <table class="table">
                        <th>عنوان</th>
                        <th>لینک</th>
                        <th>زیر منو</th>
                        <th>عملیات</th>

                        @foreach ($menus as $menus_item)
                        <tr>
                            <td>{{$menus_item->title}}</td>
                            <td><a href="/{{$menus_item->link}}" dir="ltr" target="_blank">/{{$menus_item->link}}</a></td>
                            <td>
                                @switch($menus_item->sub)
                                    @case(null)
                                        <i class="fa fa-close text-warning" style="background: no-repeat"></i>
                                    @break
                                    @case(!null)
                                        <i class="fa fa-check text-success" style="background: no-repeat"></i>
                                        @break
                                    @default
                                        
                                @endswitch
                            </td>
                            <td>
                                <a href="{{route('menus.delete',$menus_item->id)}}" class="btn btn-danger btn-sm">حذف</a>
                                <a href="{{route('menus.edit',$menus_item->id)}}" class="btn btn-success btn-sm">ویرایش</a>
                            </td>
                        </tr>
                        @endforeach

                   </table>
                    
                </div>

            </div>

            @if ($en==1)
                <h1 class="mt-5 mb-5">منو انگلیسی</h1>
            <div class="card card-primary p-0 mt-3 ml-4 col-lg-4" style="overflow: hidden">
                <form action="{{ route('menus.create.en') }}" method="POST" enctype="multipart/form-data"> @csrf
                    <div class="card-header ">
                        <h3 class="card-title"> افزودن آیتم به منو انگلیسی
                        <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">
                            
                        </h3>
                    </div>
 
                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> * عنوان </label>
                            <input type="text" class="form-control" name="en_title" value="{{ old('name') }}" required>
                        </div>

                   

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> * لینک </label>
                            <input type="text" class="form-control" dir="ltr" name="en_link" value="{{ old('link') }}"
                                placeholder="example" required>
                                
                        </div>
                        
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> زیر منو </label>
                                <select name="en_sub" class="form-control">
                                    <option value="">--- انتخاب کنید ---</option>
                                    <option value="Blog">مقالات</option>
                                    <option value="Service">خدمات</option>
                                    <option value="Product">محصولات</option>
                                    <option value="Cat">دسته بندی ها</option>
                                </select>
                        </div>


                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> تعداد نمایش زیر منو </label>
                            <input type="number" class="form-control" name="en_count" value=" {{ old('link') }} "
                                placeholder="">
                        </div>
                        

                        <button class="btn btn-warning col-lg-2 mt-4">ثبت</button>
                    </div>
                </form>

            </div>


            <div class="card card-primary p-0 mt-3 col-lg-7">
                <div class="card-header">
                    <h3 class="card-title"> لیست منو انگلیسی
                        <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">

                    </h3>
                </div>

                <div class="card-body row">

                   <table class="table">
                        <th>عنوان</th>
                        <th>لینک</th>
                        <th>زیر منو</th>
                        <th>عملیات</th>

                        @foreach ($en_menus as $menus_item)
                        <tr>
                            <td>{{$menus_item->title}}</td>
                            <td><a href="/{{$menus_item->link}}" dir="ltr" target="_blank">/{{$menus_item->link}}</a></td>
                            <td>
                                @switch($menus_item->sub)
                                    @case(null)
                                        <i class="fa fa-close text-warning" style="background: no-repeat"></i>
                                    @break
                                    @case(!null)
                                        <i class="fa fa-check text-success" style="background: no-repeat"></i>
                                        @break
                                    @default
                                        
                                @endswitch
                            </td>
                            <td>
                                <a href="{{route('menus.delete.en',$menus_item->id)}}" class="btn btn-danger btn-sm">حذف</a>
                                <a href="{{route('menus.edit.en',$menus_item->id)}}" class="btn btn-success btn-sm">ویرایش</a>
                            </td>
                        </tr>
                        @endforeach

                   </table>
                    
                </div>

            </div>

            @endif



        </div>


    </section>
@endsection
