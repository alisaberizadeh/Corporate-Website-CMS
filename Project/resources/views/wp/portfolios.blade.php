@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>مدیریت نمونه کار ها</h1>
                    
                </div>

            </div>
        </div>

        <div class="row">

                <div class="card card-primary mt-3 p-0">
                    <div class="card-header">
                        <h3 class="card-title">لیست نمونه کار ها </h3>
                    </div>

                    <div class="card-body">
                       
                        <div class="col-lg-12 row mb-5">
                            <table class="table">
                                <th>#</th>
                                <th>نام</th>
                                <th>تصویر</th>
                                <th>لینک</th>
                                <th>عملیات</th>

                                @foreach ($Portfolio as $Portfolio_item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$Portfolio_item->name}}</td>
                                    <td><img style="width: 50px;" src="{{asset($Portfolio_item->image)}}" alt=""></td>
                                    <td><a href="{{$Portfolio_item->link}}">{{$Portfolio_item->link}}</a></td>
                                    <td>
                                        <a href="{{route('portfolio.edit',$Portfolio_item->id)}}" class="btn btn-success float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                        <a href="{{route('portfolio.delete',$Portfolio_item->id)}}" class="btn  btn-danger show_service_confirm"><i class="fa fa-trash"></i></a>
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
                        <h3 class="card-title">لیست نمونه کار های انگلیسی 
                            <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">

                        </h3>
                    </div>

                    <div class="card-body">
                       
                        <div class="col-lg-12 row mb-5">
                            <table class="table">
                                <th>#</th>
                                <th>نام</th>
                                <th>تصویر</th>
                                <th>لینک</th>
                                <th>عملیات</th>

                                @foreach ($en_Portfolio as $Portfolio_item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$Portfolio_item->name}}</td>
                                    <td><img style="width: 50px;" src="{{asset($Portfolio_item->image)}}" alt=""></td>
                                    <td><a href="{{$Portfolio_item->link}}">{{$Portfolio_item->link}}</a></td>
                                    <td>
                                        <a href="{{route('portfolio.edit.en',$Portfolio_item->id)}}" class="btn btn-success float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                        <a href="{{route('portfolio.delete.en',$Portfolio_item->id)}}" class="btn  btn-danger show_service_confirm"><i class="fa fa-trash"></i></a>
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
