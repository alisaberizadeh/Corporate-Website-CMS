@extends('layouts.app')
@include('includes.yields')
@include('includes.meta',[
    'key'=>$single->keywords,
    'subject'=>$single->name,
])
@section('content')
@include('includes.styles')


    
     
    <div class="breatcome_area d-flex align-items-center" style="background-image: url({{asset($single->image)}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>{{$single->name}} </h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="/">خانه</a><i
                                        class="fa fa-angle-left"></i><span>بلاگ </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about_area pt-85 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pr-4 mb-3">
                                <p>
                                    {{$single->date_fa}}
                                </p>
                            </div>
                            <div class="singel-about-content boder pr-4 mb-2">
                                <p>
                                    {!!$single->text!!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
