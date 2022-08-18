@extends('layouts.app')
@include('includes.yields')
@include('includes.meta',[
    'key'=>"",
    'subject'=>" ورود به ".$title,
])

@section('content')
@include('includes.styles')
<div class="breatcome_area d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcome_title">
                    <div class="breatcome_title_inner pb-2">
                        <h2>ورود به حساب </h2>
                    </div>
                    <div class="breatcome_content">
                        <ul>
                            <li><a href="https://demos.sypna.ir/techno/rtl/techno/index">خانه</a><i
                                    class="fa fa-angle-left"></i><a href="#">ورود </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main_contact_area pt-80 bg_color2 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text_center mb-55">
                    
                    <div class="section_main_title text-right">
                        <h1>ورود به حساب کاربری</h1>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact_from">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('login')}}" method="POST"> @csrf
                            <div class="col-lg-6">
                                <div class="form_box mb-20"><input type="text" name="email"
                                        placeholder="ایمیل خود را وارد کنید" required></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_box mb-20"><input type="password" name="password"
                                        placeholder="کلمه عبور خود را وارد کنید" required>
                                </div>  
                                        <div class="form-check-inline">
                                            <label class="form-check-label text-dark" >
                                              <input style="margin-left: 7px" type="checkbox" class="form-check-input"value="">مرا به خاطر بسپار
                                            </label>
                                          </div>                                     
                            </div>
                         
                            <button class="btn btn-primary">ورود</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div> 


@endsection