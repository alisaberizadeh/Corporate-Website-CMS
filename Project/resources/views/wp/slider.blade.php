@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>مدیریت اسلایدر</h1>

                </div>

            </div>
        </div>

        <div class="row">

            <div class="card card-primary mt-3 p-0">
                <div class="card-header">
                    <h3 class="card-title">  لیست اسلاید ها </h3>
                </div>

                <div class="card-body">

                    <div class="col-lg-12 row mb-5">
                        <table class="table">
                            <th>#</th>
                            <th>تصویر</th>
                             <th>عملیات</th>

                            @foreach ($Slider as $Slider_item)
                                <tr>
                                    <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                    <td><img style="width:180px;height:100px;border-radius: 3px" src="{{asset($Slider_item->image)}}" alt=""></td>
                                     <td>
                                        <a href="{{route('slider.edit',$Slider_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                        <a href="{{route('slider.delete',$Slider_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach


                            
                           

                        </table>
                        @if (count($Slider) < 1)
                        <h4 class="text-center" style="margin-top: 30px"><strong>نتیجه ای یافت نشد !!!</strong>
                        </h4>
                    @endif
                    </div>


                </div>

            </div>

            <div class="card card-primary mt-3 p-0">
                <div class="card-header">
                    <h3 class="card-title">  لیست اسلاید های انگلیسی </h3>
                </div>

                <div class="card-body">

                    <div class="col-lg-12 row mb-5">
                        <table class="table">
                            <th>#</th>
                            <th>تصویر</th>
                             <th>عملیات</th>

                            @foreach ($en_Slider as $Slider_item)
                                <tr>
                                    <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                    <td><img style="width:180px;height:100px;border-radius: 3px" src="{{asset($Slider_item->image)}}" alt=""></td>
                                     <td>
                                        <a href="{{route('slider.edit.en',$Slider_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                        <a href="{{route('slider.delete.en',$Slider_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach


                            
                           

                        </table>
                        @if (count($Slider) < 1)
                        <h4 class="text-center" style="margin-top: 30px"><strong>نتیجه ای یافت نشد !!!</strong>
                        </h4>
                    @endif
                    </div>


                </div>

            </div>






        </div>


    </section>
@endsection
