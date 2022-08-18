@extends('layouts.app')
@include('includes.yields')
@include('includes.meta',[
    'key'=>$single_product->keyworlds,
    'subject'=>$single_product->title,
])

@section('content')
@include('includes.styles')



    <div class="breatcome_area d-flex align-items-center"
        style="background-image: url({{ asset($single_product->image) }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>{{ $single_product->title }} </h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="/">خانه</a><i class="fa fa-angle-left"></i><span>محصولات </span></li>
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
                                <h3>
                                    {{ $single_product->title }}
                                </h3>
                            </div>
                            <div class="singel-about-content boder pr-4 mb-2">
                                <div class="col-md-12 text-center">
                                    <img style="max-width: 100%" src="{{ asset($single_product->image) }}" alt=" {{ $single_product->title }}">
                                </div>
                                <p>
                                    {!! $single_product->text !!}
                                </p>


                            </div>
                            @if (count($list_comments) > 1)
                            <div class="col-md-8">
                                <div class="blog_comments_section mt-5">
                                    <div class="comments_ttl">
                                        <h3>  نظرات</h3>
                                    </div>
                                    @foreach ($list_comments as $list_comments_item)
                                        <div class="single_comments">
                                        <div class="comments_thumb"><img style="width: 60px;"
                                                src="{{asset('/images/comment_avatar.png')}}"
                                                alt="کاربر"></div>
                                        <div class="commentst_content">
                                            <div class="post_meta">
                                                <span class="badmin"> {{$list_comments_item->name}} </span>
                                            </div>
                                            <p>
                                                {{$list_comments_item->text}}
                                            </p>
                                        <span class="float-left"> {{$list_comments_item->date_fa}} </span>

                                        </div>

                                    </div>
                                    @endforeach
                                    
                                    

                                </div>
                            </div>
                                @endif
                           
                            <div class="col-md-8">
                                <div class="blog_reply_coment_dtl mt-5">
                                    <div class="reply_ttl">
                                        <h3>نظر خود را بنویسید</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="contact_from mr-20">
                                                <form action="{{ route('comment') }}" method="POST"> @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form_box mb-30"><input type="text" name="name"
                                                                    placeholder="نام خود را وارد کنید" required></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form_box mb-30"><input type="email" name="email"
                                                                    placeholder="ایمیل خود را وارد کنید" required></div>
                                                        </div>
                                                        <input type="hidden" name="for" value="{{ $single_product->id }}"
                                                            id="">


                                                        <div class="col-lg-12">
                                                            <div class="form_box mb-30">
                                                                <textarea name="text" required id="message" cols="30" rows="10" placeholder="پیام خود را وارد کنید"></textarea>
                                                            </div>
                                                            <div class="quote_btn "><button class="btn"
                                                                    type="submit">ارسال
                                                                    پیام</button></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
