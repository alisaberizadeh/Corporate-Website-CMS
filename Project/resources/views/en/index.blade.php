@extends('en.layouts.app')
@include('includes.en.yields')
@include('includes.en.meta',[
    'key'=>"",
    'subject'=>$title
])

@section('content')
@include('includes.en.styles')

@if ($slider == 1)

<div class="slider_list owl-carousel">
    @foreach ($slider_ui as $slider_ui_item)
    <div class="slider_area d-flex align-items-center slider4" style="background-image: url('{{ $slider_ui_item->image }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_slider">
                        <div class="slider_content color_black">
                            <div class="slider_text">
                                <div class="slider_text_inner" style="width: 100%">
                                    <h1>{!! $slider_ui_item->title !!}</h1>
                                 </div>
                                <div class="slider_text_desc">
                                    <p>
                                        {!! $slider_ui_item->text !!}
                                    </p>
                                </div> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif






@if ($services == 1)
<div class="service_area bg_color2 pt-80 pb-70">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="section_title text_center mb-5">
                    <div class="section_sub_title uppercase mb-3">
                        <h6>Services</h6>
                    </div>
                    <div class="section_main_title">
                        <h1>The Services We Provide</h1>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">


            @foreach ($services_ui as $services_ui_item)
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="service_style_three pt-60 pl-30 pr-30 mb-5 text_center">
                        <div class="service_style_three_icon mb-35"><i class="{{ $services_ui_item->icon }}"></i>
                        </div>
                        <div class="service_style_three_title pb-3 mb-3">
                            <h4>{{ $services_ui_item->name }}</h4>
                        </div>

                        <div class="service_style_three_bt_icon pt-30">
                            <a href="{{ route('en.services_single', $services_ui_item->id) }}"><i
                                    class="fa fa-long-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</div>
@endif





@if ($statistics == 1)
<div class="counter_area white bg_before bg_fixed page_speed_736417182"
    style="background-size: cover;background-image: url({{ asset($statistics_bg->src) }})">
    <div class="container">
        <div class="row">
            @foreach ($statistics_ui as $statistics_ui_item)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="single_counter_icon pb-3"><i class="{{ $statistics_ui_item->icon }}"></i>
                        </div>
                        <div class="countr_text">
                            <h1><span class="counter">{{ $statistics_ui_item->value }}</span>+</h1>
                        </div>
                        <div class="counter_desc">
                            <h5>{{ $statistics_ui_item->title }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
@endif


@if ($random_product == 1 && $products_check == 1)
<div class="blog_area bg_color2 pt-85 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section_title text_left mb-60 mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6>Products</h6>
                    </div>
                    <div class="section_main_title">
                        <h1>See some of our products</h1>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($random_product_ui as $random_product_ui_item)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog mb-4">
                        <div class="single_blog_thumb"><a
                                href="{{ route('product_single', $random_product_ui_item->id) }}"><img
                                    src="{{ asset($random_product_ui_item->image) }}"
                                    alt="{{ $random_product_ui_item->title }}" /></a>
                        </div>
                        <div class="single_blog_content pt-2 pl-4 pr-4">
                            <div class="blog_page_title pb-3">
                                <h6><a
                                        href="{{ route('product_single', $random_product_ui_item->id) }}">{{ $random_product_ui_item->title }}</a>
                                </h6>
                            </div>


                        </div>
                    </div>
                </div>
            @endforeach




        </div>
    </div>
</div>
@endif


@if ($team == 1)
<div class="team_area pt-80 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section_title text_left mb-50 mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6>Our Team</h6>
                    </div>
                    <div class="section_main_title">
                        <h1>Our team members</h1>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">


            @foreach ($team_ui as $team_ui_item)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_team mb-4">
                        <div class="single_team_thumb"><img src="{{ asset($team_ui_item->avatar) }}"
                                alt="{{ $team_ui_item->name }}" />
                            <div class="single_team_icon">
                                <a href="{{ $team_ui_item->instagram }}"><i class="fa fa-instagram"></i></a>
                                <a href="{{ $team_ui_item->twitter }}"><i class="fa fa-twitter"></i></a>
                                <a href="{{ $team_ui_item->linkedin }}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{ $team_ui_item->github }}"><i class="fa fa-github"></i></a>
                            </div>
                        </div>
                        <div class="single_team_content">
                            <h4>{{ $team_ui_item->name }}</h4><span>{{ $team_ui_item->level }}</span>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>

@endif




    
@if ($plans == 1)
<div class="pricing_area pt-50 pb-70" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text_center mb-50 mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6>Plans</h6>
                    </div>
                    <div class="section_main_title">
                        <h1>See our Plans</h1>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($plans_ui as $plans_ui_item)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_pricing mb-4">
                        <div class="single_pricing_content">
                            <div class="single_pricing_content_inner">
                                <div class="pricing_head pb-4">
                                    <div class="pricing_title">
                                        <h3>{{ $plans_ui_item->name }}</h3>
                                    </div>
                                </div>
                                <div class="pricing_body pt-35 pb-4">
                                    <div class="featur">
                                        <ul>
                                            @foreach (explode('-', $plans_ui_item->text) as $tx)
                                                <li>{{ $tx }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="pricing_tk pt-3 pb-4">
                                    <h2>{{ number_format($plans_ui_item->price) }} <span> <br>
                                            {{ $plans_ui_item->type }}</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</div>
@endif



@if ($blog == 1)
<div class="blog_area bg_color2 pt-85 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section_title text_left mb-60 mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6>Articles</h6>
                    </div>
                    <div class="section_main_title">
                        <h1>View the latest articles</h1>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="section_button mt-50">
                    <div class="button two text-right"><a href="/en/blog">All Articles</a></div>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($blog_ui as $blog_ui_item)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog mb-4">
                        <div class="single_blog_thumb"><a
                                href="{{ route('en.single', $blog_ui_item->id) }}"><img
                                    src="{{ asset($blog_ui_item->image) }}"
                                    alt="{{ $blog_ui_item->name }}" /></a>
                        </div>
                        <div class="single_blog_content pt-4 pl-4 pr-4">
                            <div class="techno_blog_meta"><a href="#">{{ $blog_ui_item->date }}</div>
                            <div class="blog_page_title pb-1">
                                <h3><a
                                        href="{{ route('en.single', $blog_ui_item->id) }}">{{ $blog_ui_item->name }}</a>
                                </h3>
                            </div>

                            <div class="blog_page_button pb-4 mt-1"><a
                                    href="{{ route('en.single', $blog_ui_item->id) }}">Read More <i
                                        class="fa fa-long-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>
    </div>
</div>
@endif





@endsection