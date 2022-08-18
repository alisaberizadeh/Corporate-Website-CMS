@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1> ویرایش منو </h1>
                </div>

            </div>
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




            <div class="card card-primary p-0 mt-3 ml-4 col-lg-5" style="overflow: hidden">
                <form action="{{ route('menus.update', $menus->id) }}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                    <div class="card-header ">
                        <h3 class="card-title"> افزودن آیتم به منو </h3>
                    </div>

                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> * عنوان </label>
                            <input type="text" class="form-control" name="title" value="{{ $menus->title }}"
                                required>
                        </div>



                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> * لینک </label>
                            <input type="text" class="form-control" dir="ltr" name="link"
                                value="{{ $menus->link }}" placeholder="example" required>

                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> زیر منو </label>
                            <select name="sub" class="form-control">

                                @switch($menus->sub)
                                    @case('')
                                        <option value="">--- انتخاب کنید ---</option>
                                    @break

                                    @case('Cat')
                                        <option value="{{ $menus->sub }}">--- دسته بندی ها ---</option>
                                    @break

                                    @case('Blog')
                                        <option value="{{ $menus->sub }}">--- مقالات ---</option>
                                    @break

                                    @case('Product')
                                        <option value="{{ $menus->sub }}">--- محصولات ---</option>
                                    @break

                                    @case('Service')
                                        <option value="{{ $menus->sub }}">--- خدمات ---</option>
                                    @break
                                @endswitch

                                <option value="Blog">مقالات</option>
                                <option value="Service">خدمات</option>
                                <option value="Product">محصولات</option>
                                <option value="Cat">دسته بندی ها</option>
                                <option value="">بدون زیر منو</option>
                            </select>
                        </div>


                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12"> تعداد نمایش زیر منو </label>
                            <input type="text" class="form-control" name="count" value=" {{ $menus->count }} "
                                placeholder="">
                        </div>


                        <button class="btn btn-warning col-lg-2 mt-4">ثبت</button>
                    </div>
                </form>

            </div>


            <div class="alert alert-info col-lg-6">
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



        </div>


    </section>
@endsection
