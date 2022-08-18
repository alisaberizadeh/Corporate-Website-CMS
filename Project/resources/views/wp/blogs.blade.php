@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>مدیریت مقالات</h1>

                </div>

            </div>
        </div>

        <div class="row">

                <div class="card card-primary mt-3 p-0">
                    <div class="card-header">
                        <h3 class="card-title">  لیست مقالات </h3>
                    </div>

                    <div class="card-body">

                        <div class="col-lg-12 row mb-5">
                            <table class="table">
                                <th>#</th>
                                <th>تصویر</th>
                                <th>عنوان</th>
                                <th>تاریخ انتشار</th>
                                <th>عملیات</th>

                                @foreach ($blogs as $blogs_item)
                                    <tr>
                                        <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                        <td><img style="width:70px;height:50px;border-radius: 3px" src="{{asset($blogs_item->image)}}" alt=""></td>
                                        <td>{{$blogs_item->name}}</td>
                                        <td>{{$blogs_item->date_fa}}</td>
                                        <td>
                                            <a href="{{route('blog.edit',$blogs_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                            <a href="{{route('blog.delete',$blogs_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>

                                        </td>
                                    </tr>
                                @endforeach


                                
                               

                            </table>
                            @if (count($blogs) < 1)
                            <h4 class="text-center" style="margin-top: 30px"><strong>نتیجه ای یافت نشد !!!</strong>
                            </h4>
                        @endif
                        </div>


                    </div>

                </div>



                @if ($en == 1)
                <div class="card card-primary mt-3 p-0">
                    <div class="card-header">
                        <h3 class="card-title">  لیست مقالات انگلیسی 
                            <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">
                        </h3>
                    </div>

                    <div class="card-body">

                        <div class="col-lg-12 row mb-5">
                            <table class="table">
                                <th>#</th>
                                <th>تصویر</th>
                                <th>عنوان</th>
                                <th>تاریخ انتشار</th>
                                <th>عملیات</th>

                                @foreach ($en_blogs as $blogs_item)
                                    <tr>
                                        <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                        <td><img style="width:70px;height:50px;border-radius: 3px" src="{{asset($blogs_item->image)}}" alt=""></td>
                                        <td>{{$blogs_item->name}}</td>
                                        <td>{{$blogs_item->date_fa}}</td>
                                        <td>
                                            <a href="{{route('blog.edit.en',$blogs_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                            <a href="{{route('blog.delete.en',$blogs_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>

                                        </td>
                                    </tr>
                                @endforeach


                                
                               

                            </table>
                            @if (count($blogs) < 1)
                            <h4 class="text-center" style="margin-top: 30px"><strong>نتیجه ای یافت نشد !!!</strong>
                            </h4>
                        @endif
                        </div>


                    </div>

                </div>

                @endif




        </div>


    </section>
@endsection
