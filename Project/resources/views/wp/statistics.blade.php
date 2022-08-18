@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>آمار و ارقام</h1>
                </div>

            </div>
        </div>

        <div class="row">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
           @endif
           
           <div class="card card-primary mt-3 p-0">
            <div class="card-header">
                <h3 class="card-title">تصویر زمینه </h3>
            </div>

            <div class="card-body row">
                <form action="{{route('statistics.background.update')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                    <img src="{{asset($background->src)}}" style="width: 100px;margin-bottom: 10px;" alt="">
                    <input type="file" name="background" class="form-control">
                    <input type="hidden" value="{{$background->src}}" name="hidden_background" class="form-control">
                    <button class="btn btn-warning col-lg-2 mt-4">بروزرسانی</button>
                </form>
            </div>

        </div>

            <form action="{{route('statistics.update')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">آمار </h3>
                    </div>

                    <div class="card-body row">
                       @foreach ($Statistic as $Statistic_item)
                           
                        <div class="col-lg-4 row mb-4">
                            <label for="" class="col-lg-12"><i class="{{$Statistic_item->icon}}"></i> </label>
                            <input type="text" class="form-control " name="icon_{{$Statistic_item->id}}" value="{{$Statistic_item->icon}}">
                        </div> 
                        <div class="col-lg-4 row mb-4 mr-2">
                            <label for="" class="col-lg-12">عنوان </label>
                            <input type="text" class="form-control " value="{{$Statistic_item->title}}" name="title_{{$Statistic_item->id}}">
                        </div> 

                        
                        <div class="col-lg-4 row mb-4 mr-2 ">
                            <label for="" class="col-lg-12">آمار </label>
                            <input type="text" class="form-control col-lg-4" name="value_{{$Statistic_item->id}}" value="{{$Statistic_item->value}}" >
                            
                            @switch($Statistic_item->status)
                                @case(0) 
                                <a href="{{route('statistics.show',$Statistic_item->id)}}" class="btn btn-sm btn-success col-lg-4 mr-4">نمایش بده</a>
                                    @break
                                @case(1)
                                <a href="{{route('statistics.hide',$Statistic_item->id)}}" class="btn btn-sm btn-danger col-lg-4 mr-4">  مخفی کن</a>
                                    @break
                            @endswitch

                        </div> 
 
                       @endforeach
                        
                       
               
                        <button class="btn btn-warning col-lg-2 mt-4">بروزرسانی</button>
                        <a href="back" onclick="back(event)" class="btn btn-dark col-lg-2  mt-4 mr-3">صفحه قبل</a>
                        <script>
                            function back(event) {
                                event.preventDefault()
                                window.history.back()
                            }
                        </script>
                    </div>

                </div>

            </form>


            @if ($en == 1)
            <form action="{{route('statistics.update.en')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">آمار انگلیسی</h3>
                    </div>

                    <div class="card-body row">
                       @foreach ($en_Statistic as $Statistic_item)
                           
                        <div class="col-lg-4 row mb-4">
                            <label for="" class="col-lg-12"><i class="{{$Statistic_item->icon}}"></i> </label>
                            <input type="text" class="form-control " name="icon_{{$Statistic_item->id}}" value="{{$Statistic_item->icon}}">
                        </div> 
                        <div class="col-lg-4 row mb-4 mr-2">
                            <label for="" class="col-lg-12">عنوان </label>
                            <input type="text" class="form-control " value="{{$Statistic_item->title}}" name="title_{{$Statistic_item->id}}">
                        </div> 

                        
                        <div class="col-lg-4 row mb-4 mr-2 ">
                            <label for="" class="col-lg-12">آمار </label>
                            <input type="text" class="form-control col-lg-4" name="value_{{$Statistic_item->id}}" value="{{$Statistic_item->value}}" >
                            
                            @switch($Statistic_item->status)
                                @case(0) 
                                <a href="{{route('statistics.show.en',$Statistic_item->id)}}" class="btn btn-sm btn-success col-lg-4 mr-4">نمایش بده</a>
                                    @break
                                @case(1)
                                <a href="{{route('statistics.hide.en',$Statistic_item->id)}}" class="btn btn-sm btn-danger col-lg-4 mr-4">  مخفی کن</a>
                                    @break
                            @endswitch

                        </div> 
 
                       @endforeach
                        
                       
               
                        <button class="btn btn-warning col-lg-2 mt-4">بروزرسانی</button>
                    </div>

                </div>

            </form>
            @endif

            



        </div>


    </section>
@endsection
