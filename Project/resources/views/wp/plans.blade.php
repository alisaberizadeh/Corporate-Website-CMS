@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>مدیریت طرح ها</h1>

                </div>

            </div>
        </div>

        <div class="row">

                <div class="card card-primary mt-3 p-0" >
                    <div class="card-header">
                        <h3 class="card-title">لیست طرح ها </h3>
                    </div>

                    <div class="card-body">

                        <div class="col-lg-12 row mb-5">
                            <table class="table">
                                <th>#</th>
                                <th>عنوان</th>
                                <th>قیمت</th>
                                <th>تمدید</th>
                                <th>عملیات</th>

                                @foreach ($plans as $plans_item)
                                    <tr>
                                        <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                        <td>{{$plans_item->name}}</td>
                                        <td>{{$plans_item->price}}</td>
                                        <td>{{$plans_item->type}}</td>
                                        <td>
                                            <a href="{{route('plans.edit',$plans_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                            <a href="{{route('plans.delete',$plans_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>

                                        </td>
                                    </tr>
                                @endforeach


                                
                               

                            </table>
                            @if (count($plans) < 1)
                            <h4 class="text-center" style="margin-top: 30px"><strong>نتیجه ای یافت نشد !!!</strong>
                            </h4>
                        @endif
                        </div>


                    </div>

                </div>


                @if ($en == 1)
                    
                <div class="card card-primary mt-3 p-0" >
                    <div class="card-header">
                        <h3 class="card-title">لیست طرح های انگلیسی
                            <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">
                        </h3>
                    </div>

                    <div class="card-body">

                        <div class="col-lg-12 row mb-5">
                            <table class="table">
                                <th>#</th>
                                <th>عنوان</th>
                                <th>قیمت</th>
                                <th>تمدید</th>
                                <th>عملیات</th>

                                @foreach ($en_plans as $plans_item)
                                    <tr>
                                        <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                        <td>{{$plans_item->name}}</td>
                                        <td>{{$plans_item->price}}</td>
                                        <td>{{$plans_item->type}}</td>
                                        <td>
                                            <a href="{{route('plans.edit.en',$plans_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                            <a href="{{route('plans.delete.en',$plans_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>

                                        </td>
                                    </tr>
                                @endforeach


                                
                               

                            </table>
                            @if (count($plans) < 1)
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
