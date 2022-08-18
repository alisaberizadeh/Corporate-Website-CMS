@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>  نظرات</h1>

                </div>

            </div>
        </div>

        <div class="row">

                <div class="card card-primary mt-3 p-0">
                    <div class="card-header">
                        <h3 class="card-title">لیست نظرات </h3>
                    </div>

                    <div class="card-body">

                        <div class="col-lg-12 row mb-5">
                            <table class="table">
                                <th>#</th>
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>پیام</th>
                                <th>وضعیت</th>
                                <th>وضعیت</th>

                                @foreach ($comments as $comments_item)
                                    <tr>
                                        <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                        <td>{{$comments_item->name}}</td>
                                        <td>{{$comments_item->email}}</td>
                                        <td>{{$comments_item->text}}</td>
                                        <td>
                                            @switch($comments_item->status)
                                                @case(0)
                                                    غیر فعال
                                                    @break
                                                @case(1)
                                                    فعال
                                                    @break
                                                @default
                                                    
                                            @endswitch
                                        </td>
                                        <td>
                                            @switch($comments_item->status)
                                                @case(0)
                                                <a href="{{route('comments.active',$comments_item->id)}}" class="btn  btn-success show_confirm">فعال شود</a>
                                                @break
                                                @case(1)
                                                <a href="{{route('comments.Noactive',$comments_item->id)}}" class="btn  btn-danger show_confirm">غیر فعال شود</a>
                                                @break
                                                @default
                                                    
                                            @endswitch

                                        </td>
                                    </tr>
                                @endforeach


                                
                               

                            </table>
                             
                        </div>


                    </div>

                </div>


                @if ($en == 1)
                    
                <div class="card card-primary mt-3 p-0">
                    <div class="card-header">
                        <h3 class="card-title">لیست نظرات انگلیسی</h3>
                    </div>

                    <div class="card-body">

                        <div class="col-lg-12 row mb-5">
                            <table class="table">
                                <th>#</th>
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>پیام</th>
                                <th>وضعیت</th>
                                <th>وضعیت</th>

                                @foreach ($en_comments as $comments_item)
                                    <tr>
                                        <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                        <td>{{$comments_item->name}}</td>
                                        <td>{{$comments_item->email}}</td>
                                        <td>{{$comments_item->text}}</td>
                                        <td>
                                            @switch($comments_item->status)
                                                @case(0)
                                                    غیر فعال
                                                    @break
                                                @case(1)
                                                    فعال
                                                    @break
                                                @default
                                                    
                                            @endswitch
                                        </td>
                                        <td>
                                            @switch($comments_item->status)
                                                @case(0)
                                                <a href="{{route('comments.active.en',$comments_item->id)}}" class="btn  btn-success show_confirm">فعال شود</a>
                                                @break
                                                @case(1)
                                                <a href="{{route('comments.Noactive.en',$comments_item->id)}}" class="btn  btn-danger show_confirm">غیر فعال شود</a>
                                                @break
                                                @default
                                                    
                                            @endswitch

                                        </td>
                                    </tr>
                                @endforeach


                                
                               

                            </table>
                             
                        </div>


                    </div>

                </div>

                @endif




        </div>


    </section>
@endsection
