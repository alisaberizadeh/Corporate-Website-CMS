@extends('layouts.app')
@include('includes.yields')
@include('includes.meta',[
    'key'=>' نمونه کار '.$title,
    'subject'=>' نمونه '.$title,
])

@section('content')
@include('includes.styles')

    
    
    <div class="breatcome_area d-flex align-items-center" style="background-image: url({{asset($portfolio_background)}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>نمونه کارها</h2>
                        </div>
                        <div class="breatcome_content" dir="rtl">
                            <ul>
                                <li><a href="https://demos.sypna.ir/techno/rtl/techno/index">خانه</a><i
                                        class="fa fa-angle-left"></i><span>نمونه کارها</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio_area pt-80 pb-70" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-50 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>{{$portfolio_information->name_fa}}</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>{{$portfolio_information->title}}</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row image_load">
@foreach ($portfolio as $portfolio_item)
    <div class="col-lg-4 col-md-6 col-sm-12 grid-item physics english">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb"><a href="{{$portfolio_item->link}}"><img
                                        src="{{asset($portfolio_item->image)}}"
                                        alt="{{$portfolio_item->name}}" /></a></div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_content_inner"> 
                                <h2><a href="{{$portfolio_item->link}}">{{$portfolio_item->name}}</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
@endforeach
                
                
            </div>
        </div>
    </div>
    
@endsection
