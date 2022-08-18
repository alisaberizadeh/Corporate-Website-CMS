@extends('en.layouts.app')
@include('includes.en.yields')
@include('includes.en.meta',[
    'key'=>'contact '.$title,
    'subject'=>' contact '.$title,
])

@section('content')
@include('includes.en.styles')

   
    <div class="breatcome_area d-flex align-items-center" style="background-image: url({{asset($contact_background)}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>Contact </h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="/en">Home</a><i
                                        class="fa fa-angle-right"></i><span>Contact</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact_address_area pt-80 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-55">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>Contact</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>We are here to help you</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">


                @foreach ($contact as $contact_item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_contact_address text_center mb-30">
                        <div class="contact_address_icon pb-3"><i class="{{$contact_item->icon}}"></i></div>
                        <div class="contact_address_title pb-2">
                            <h4>{{$contact_item->title}}</h4>
                        </div>
                        <div class="contact_address_text">
                            <p>{{$contact_item->text}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
                


            </div>
        </div>
    </div>
    
@endsection
