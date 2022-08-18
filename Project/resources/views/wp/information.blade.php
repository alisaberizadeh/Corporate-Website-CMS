@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>اطلاعات شرکت</h1>
                </div>

            </div>
        </div>

        <div class="row">

            <form action="{{ route('information.update') }}" method="POST" enctype="multipart/form-data"> @csrf
                @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header"  >
                        <h3 class="card-title">اطلاعات </h3>
                    </div>

                    <div class="card-body">
                        <div class="col-lg-12 row">
                            <label for="" cl ss="col-lg-12">ایمیل</label>
                            <input type="email" name="email"
                                class="form-control col-lg-9 @error('email') is-invalid @enderror "
                                value="{{ $email->value }}" required>
                            @switch($email->status)
                                @case(0)
                                    <a href="{{ route('information.show', $email->id) }}" class="btn btn-success col-lg-2 mr-2">نمایش
                                        بده <i class="fa fa-eye"></i></a>
                                @break

                                @case(1)
                                    <a href="{{ route('information.hide', $email->id) }}" class="btn btn-danger col-lg-2 mr-2">مخفی
                                        کن <i class="fa fa-eye-slash"></i></a>
                                @break
                            @endswitch

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-12 row mt-4">
                            <label for="" class="col-lg-12">تلفن</label>
                            <input type="text" name="phone"
                                class="form-control col-lg-9 @error('phone') is-invalid @enderror "
                                value="{{ $phone->value }}" required>
                            @switch($phone->status)
                                @case(0)
                                    <a href="{{ route('information.show', $phone->id) }}" class="btn btn-success col-lg-2 mr-2">نمایش
                                        بده <i class="fa fa-eye"></i></a>
                                @break

                                @case(1)
                                    <a href="{{ route('information.hide', $phone->id) }}" class="btn btn-danger col-lg-2 mr-2">مخفی
                                        کن <i class="fa fa-eye-slash"></i></a>
                                @break
                            @endswitch
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-12 row mt-4">
                            <label for="" class="col-lg-12">شماره موبایل</label>
                            <input type="text" name="mobile"
                                class="form-control col-lg-9 @error('mobile') is-invalid @enderror "
                                value="{{ $mobile->value }}" required>
                            @switch($mobile->status)
                                @case(0)
                                    <a href="{{ route('information.show', $mobile->id) }}"
                                        class="btn btn-success col-lg-2 mr-2">نمایش بده <i class="fa fa-eye"></i></a>
                                @break

                                @case(1)
                                    <a href="{{ route('information.hide', $mobile->id) }}" class="btn btn-danger col-lg-2 mr-2">مخفی
                                        کن <i class="fa fa-eye-slash"></i></a>
                                @break
                            @endswitch
                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12 row mt-4">
                            <label for="" class="col-lg-12">آدرس</label>
                            <input type="text" name="address"
                                class="form-control col-lg-9 @error('address') is-invalid @enderror "
                                value="{{ $address->value }}" required>
                            @switch($address->status)
                                @case(0)
                                    <a href="{{ route('information.show', $address->id) }}"
                                        class="btn btn-success col-lg-2 mr-2">نمایش بده <i class="fa fa-eye"></i></a>
                                @break

                                @case(1)
                                    <a href="{{ route('information.hide', $address->id) }}"
                                        class="btn btn-danger col-lg-2 mr-2">مخفی کن <i class="fa fa-eye-slash"></i></a>
                                @break
                            @endswitch
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button class="btn btn-warning mt-4">بروزرسانی</button>
                        
                        <a href="back" onclick="back(event)" class="btn btn-dark col-lg-2  mt-4 mr-3">صفحه قبل</a>
                        <script>
                            function back(event) {
                                event.preventDefault()
                                window.history.back()
                            }
                        </script>
                    </div>

                </div>

            </form>


            



@if ($en == 1)
<div class="card card-primary p-0 mt-3">
    <div class="card-header">
        <h3 class="card-title">اطلاعات انگلیسی 
            <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">

        </h3>
        
       
    </div>
    <div class="card-body">
        <form action="{{ route('information.update.en') }}" method="POST" enctype="multipart/form-data"> @csrf
            @method('put')

            <div class="col-lg-12 row">
                <label for="" class="col-lg-12">ایمیل</label>
                <input type="email" name="en_email"
                    class="form-control col-lg-9 @error('en_email') is-invalid @enderror "
                    value="{{ $en_email->value }}" required>
                @switch($en_email->status)
                    @case(0)
                        <a href="{{ route('information.show', $en_email->id) }}"
                            class="btn btn-success col-lg-2 mr-2">نمایش بده <i class="fa fa-eye"></i></a>
                    @break

                    @case(1)
                        <a href="{{ route('information.hide', $en_email->id) }}"
                            class="btn btn-danger col-lg-2 mr-2">مخفی کن <i class="fa fa-eye-slash"></i></a>
                    @break
                @endswitch

                @error('en_email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-lg-12 row mt-4">
                <label for="" class="col-lg-12">تلفن</label>
                <input type="text" name="en_phone"
                    class="form-control col-lg-9 @error('en_phone') is-invalid @enderror "
                    value="{{ $en_phone->value }}" required>
                @switch($en_phone->status)
                    @case(0)
                        <a href="{{ route('information.show', $en_phone->id) }}"
                            class="btn btn-success col-lg-2 mr-2">نمایش بده <i class="fa fa-eye"></i></a>
                    @break

                    @case(1)
                        <a href="{{ route('information.hide', $en_phone->id) }}"
                            class="btn btn-danger col-lg-2 mr-2">مخفی کن <i class="fa fa-eye-slash"></i></a>
                    @break
                @endswitch
                @error('en_phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-lg-12 row mt-4">
                <label for="" class="col-lg-12">شماره موبایل</label>
                <input type="text" name="en_mobile"
                    class="form-control col-lg-9 @error('en_mobile') is-invalid @enderror "
                    value="{{ $en_mobile->value }}" required>
                @switch($en_mobile->status)
                    @case(0)
                        <a href="{{ route('information.show', $en_mobile->id) }}"
                            class="btn btn-success col-lg-2 mr-2">نمایش بده <i class="fa fa-eye"></i></a>
                    @break

                    @case(1)
                        <a href="{{ route('information.hide', $en_mobile->id) }}"
                            class="btn btn-danger col-lg-2 mr-2">مخفی کن <i class="fa fa-eye-slash"></i></a>
                    @break
                @endswitch
                @error('en_mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-lg-12 row mt-4">
                <label for="" class="col-lg-12">آدرس</label>
                <input type="text" name="en_address"
                    class="form-control col-lg-9 @error('en_address') is-invalid @enderror "
                    value="{{ $en_address->value }}" required>
                @switch($en_address->status)
                    @case(0)
                        <a href="{{ route('information.show', $en_address->id) }}"
                            class="btn btn-success col-lg-2 mr-2">نمایش بده <i class="fa fa-eye"></i></a>
                    @break

                    @case(1)
                        <a href="{{ route('information.hide', $en_address->id) }}"
                            class="btn btn-danger col-lg-2 mr-2">مخفی کن <i class="fa fa-eye-slash"></i></a>
                    @break
                @endswitch
                @error('en_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button class="btn btn-warning mt-4">بروزرسانی</button>


        </form>

    </div>
</div>
@endif








        </div>


    </section>
@endsection
