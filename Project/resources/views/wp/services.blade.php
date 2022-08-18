@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>مدیریت سرویس ها</h1>
                    
                </div>

            </div>
        </div>

        <div class="row">

            <div class="card card-primary mt-3 p-0">
                <div class="card-header">
                    <h3 class="card-title">خدمات </h3>
                </div>

                <div class="card-body">
                   
                    <div class="col-lg-12 row mb-5">
                        <table class="table">
                            <th>#</th>
                            <th>عنوان</th>
                            <th>آیکون</th>
                            <th>عملیات</th>

                            @foreach ($service as $service_item)
                            <tr>
                                <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                <td class="col-lg-3">{{$service_item->name}}</td>
                                <td class="col-lg-3"><p><i class="{{$service_item->icon}} ml-1"></i> {{$service_item->icon}}</p></td>
                                <td class="col-lg-2">
                                    <a href="{{route('services.edit',$service_item->id)}}" class="btn btn-success float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                    <a href="{{route('services.delete',$service_item->id)}}" class="btn  btn-danger show_service_confirm"><i class="fa fa-trash"></i></a>
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
        <h3 class="card-title">خدمات انگلیسی </h3>
    </div>

    <div class="card-body">
       
        <div class="col-lg-12 row mb-5">
            <table class="table">
                <th>#</th>
                <th>عنوان</th>
                <th>آیکون</th>
                <th>عملیات</th>

                @foreach ($en_service as $service_item)
                <tr>
                    <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                    <td class="col-lg-3">{{$service_item->name}}</td>
                    <td class="col-lg-3"><p><i class="{{$service_item->icon}} ml-1"></i> {{$service_item->icon}}</p></td>
                    <td class="col-lg-2">
                        <a href="{{route('services.edit.en',$service_item->id)}}" class="btn btn-success float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                        <a href="{{route('services.delete',$service_item->id)}}" class="btn  btn-danger show_service_confirm"><i class="fa fa-trash"></i></a>
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
