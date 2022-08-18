@extends('layouts.app')
@include('includes.yields')
@include('includes.meta',[
    'key'=>' درباره '.$title,
    'subject'=>' درباره '.$title,
])



@section('content')
@include('includes.styles')

    
     
    <div class="breatcome_area d-flex align-items-center" style="background-image: url({{asset($about_background)}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>درباره ما </h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="/">خانه</a><i
                                        class="fa fa-angle-left"></i><span>درباره ما </span></li>
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
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>{{$about_information->name_fa}}</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>{{$about_information->title}}</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pr-4">
                                <p>
                                    {!!
                                        $about_text
                                        !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flipbox_area top_feature pb-70 two">
        <div class="container">
            <div class="row">
                @foreach ($About_Element as $About_Element_item)
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon"><i class="{{$About_Element_item->icon}}"></i></div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>{{$About_Element_item->title}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>{{$About_Element_item->title}}</h3>
                                </div>
                                <div class="flipbox_desc pt-3">
                                    <p>{{$About_Element_item->text}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </div> 
@endsection
