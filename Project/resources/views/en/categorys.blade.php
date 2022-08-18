@extends('en.layouts.app')

@include('includes.en.yields')
@include('includes.en.meta',[
    'key'=>'  Product '.$title,
    'subject'=>' Product '.$title,
])


@section('content')
@include('includes.en.styles')

    
    
 
    <div class="breatcome_area d-flex align-items-center" style="background-image: url({{asset($bg_cat)}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>{{$cat_name}}    </h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="/">Home</a><i
                                         class="fa fa-angle-left"></i><span>Categorys </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_area pt-85 pb-65">
        <div class="container">
            <div class="row">
                @foreach ($products as $products_item)
                   <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog mb-30">
                        <div class="single_blog_thumb pb-4"><a
                                href="{{route('product_single',$products_item->id)}}"><img
                                    src="{{asset($products_item->image)}}"
                                    alt="{{$products_item->name}}" /></a></div>
                        <div class="single_blog_content pl-4 pr-4">
                            <div class="blog_page_title pb-35">
                                <h3><a href="{{route('product_single',$products_item->id)}}">{{$products_item->title}}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                 
                @endforeach
                
            </div>
        </div>
    </div>
    
@endsection
