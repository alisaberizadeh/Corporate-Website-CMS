@extends('en.layouts.app')



@section('content')
<style>
    :root{
        --color_base:{{$color_base}};
    }
</style>

<div class="breatcome_area d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcome_title">
                    <div class="breatcome_title_inner pb-2">
                        <h2>Login to Account </h2>
                    </div>
                    <div class="breatcome_content">
                        <ul>
                            <li><a href="https://demos.sypna.ir/techno/rtl/techno/index">Home</a><i
                                    class="fa fa-angle-right"></i><a href="#">Login </a></li>
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
                        <h1>Login to Account</h1>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact_from">
                    
                    <form action="{{route('login')}}" method="POST"> @csrf
                            <div class="col-lg-6">
                                <div class="form_box mb-20"><input type="text" name="email"
                                        placeholder="Enter Your Email" required></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_box mb-20"><input type="password" name="password"
                                        placeholder="Enter Your Password" required>
                                </div>  
                                        <div class="form-check-inline">
                                            <label class="form-check-label text-dark" >
                                              <input style="margin-left: 7px" type="checkbox" class="form-check-input"value="">Remember
                                            </label>
                                          </div>                                     
                            </div>
                         
                            <button class="btn btn-primary mt-3">Sing In</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div> 


@endsection