@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>بخش تنظیمات</h1>
                </div>

            </div>
        </div>

        <div class="row">

            <form action="{{ route('setting.base') }}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">اصلی </h3>
                    </div>
                    <div class="card-body row">

                        <div class="col-lg-6">
                            <label for="title" class="ml-5">عنوان سایت</label>
                            <input type="text" class="form-control" value="{{ $title }}" name="title" id="title">
                        </div>
                        <div class="col-lg-6">
                            <label for="description" class="ml-5">توضیح سایت</label>
                            <textarea style="height: 41px" class="form-control" name="description" id="description">{{ $description }}</textarea>

                        </div>

                        <div class="col-lg-6 mt-4">
                            <label for="" class="ml-5">نسخه انگلیسی</label>
                            <select name="english" class="form-control" required>
                                @switch($en)
                                    @case(1)
                                        <option value="1">فعال</option>
                                        <option value="0">غیر فعال</option>
                                    @break

                                    @case(0)
                                        <option value="0">غیر فعال</option>
                                        <option value="1"> فعال</option>
                                    @break
                                @endswitch
                            </select>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <label for="" class="ml-5">حالت درحال تعمیر  </label>
                            <select name="repair" class="form-control" required>
                                @switch($repair)
                                    @case(1)
                                        <option value="1">فعال</option>
                                        <option value="0">غیر فعال</option>
                                    @break

                                    @case(0)
                                        <option value="0">غیر فعال</option>
                                        <option value="1"> فعال</option>
                                    @break
                                @endswitch
                            </select>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <label for="color_base" class="ml-5">رنگ اصلی</label>
                            <input style="height:41px ;" type="color" class="form-control" value="{{ $color_base }}"
                                name="color_base" id="color_base">
                        </div>


                        <div class="col-lg-6 mt-4">
                            <label for="color_base" class="ml-5">فاوآیکون </label><br>
                            <img src="{{ asset("$fav") }}" alt="">
                            <input type="file" class="form-control @error('fav') is-invalid @enderror" name="fav">
                            @error('fav')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="col-lg-6">
                            <label for="keyworlds" class="ml-5">کلمات کلیدی اصلی (سئو)</label>
                            <textarea style="height: 60px" class="form-control" name="keyworlds" id="keyworlds"  placeholder='کلمات را با علامت "," از هم جدا کنید'>{{ $keyworlds }}</textarea>

                        </div>

                        <div class="col-lg-6 mt-4">
                            <label for="link_whatsapp" class="ml-5">لینک واتس اپ</label>
                            <input type="text" class="form-control" value="{{ $link_whatsapp }}" name="link_whatsapp" id="link_whatsapp">
                        </div>

                        <div class="col-lg-12">
                            <button class="btn btn-warning float-left mt-5">بروزرسانی</button>
                        </div>
                    </div>

                </div>

            </form>


            @if ($en == 1)
            <form action="{{ route('setting.base.en') }}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">اطلاعات انگلیسی </h3>
                    </div>
                    <div class="card-body row">

                        <div class="col-lg-6">
                            <label for="title" class="ml-5">عنوان سایت</label>
                            <input type="text" class="form-control" value="{{ $en_title }}" name="en_title" id="title">
                        </div>
                        <div class="col-lg-6">
                            <label for="description" class="ml-5">توضیح سایت</label>
                            <textarea style="height: 41px" class="form-control" name="en_description" id="description">{{ $en_description }}</textarea>

                        </div>


                        <div class="col-lg-6 mt-4">
                            <label for="keyworlds" class="ml-5">کلمات کلیدی اصلی (سئو)</label>
                            <textarea style="height: 60px" class="form-control" name="en_keyworlds" id="keyworlds"  placeholder='کلمات را با علامت "," از هم جدا کنید'>{{ $en_keyworlds }}</textarea>

                        </div>

                        

                        <div class="col-lg-12">
                            <button class="btn btn-warning float-left mt-5">بروزرسانی</button>
                        </div>
                    </div>

                </div>

            </form>
            @endif

            <form action="{{ route('setting.logo1') }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
                @csrf @method('put')
                <div class="card card-primary mt-2">
                    <div class="card-header">لوگو 1</div>
                    <div class="card-body">
                        <div class="col-lg-12 mt-4">
                            <label for="color_base" class="ml-5">سایز پیشنهادی 32 * 185 (تیره)</label><br>
                            <img style="height: 40px" src="{{ asset("$logo_1") }}" alt="">
                            <input type="file" class="form-control col-lg-8 mt-2  @error('logo1') is-invalid @enderror" " value="{{ $logo_1 }}" name="logo1" required>
                            @error('logo1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <button class="btn btn-warning float-left">بروزرسانی</button>
                        </div>
                    </div>
                </div>
            </form>


            <form action="{{ route('setting.logo2') }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
                @csrf @method('put')
                <div class="card card-primary mt-2">
                    <div class="card-header">لوگو 2</div>
                    <div class="card-body">
                        <div class="col-lg-12 mt-4">
                            <label for="color_base" class="ml-5">سایز پیشنهادی 32 * 160 (روشن)</label><br>
                            <img style="height: 40px;background: black;" src="{{ asset("$logo_2") }}" alt="">
                            <input type="file" class="form-control col-lg-8 mt-2 @error('logo2') is-invalid @enderror" " value="{{ $logo_2 }}" name="logo2" required>
                            @error('logo2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <button class="btn btn-warning float-left">بروزرسانی</button>
                        </div>
                    </div>
                </div>
            </form>





        </div>


    </section>
@endsection
