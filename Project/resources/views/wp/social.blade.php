@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>شبکه های اجتماعی</h1>
                </div>

            </div>
        </div>

        <div class="row">

            <form action="{{route('social.update')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3 p-0">
                    <div class="card-header">
                        <h3 class="card-title">آدرس ها </h3>
                    </div>

                    <div class="card-body">
                        @foreach ($social as $social_item)
                            
                        <div class="col-lg-12 row mb-5">
                            <label for="" class="col-lg-12">{{$social_item->name}}</label>
                            <i style="text-align: center;margin-top: 6px;font-size: 28px;" class="col-lg-1 {{$social_item->icon}}"></i>
                            <input type="text" name="{{$social_item->name}}" class="form-control col-lg-8 text-center" value="{{$social_item->value}}" required>
                            @switch($social_item->status)
                                @case(0)
                                <a href="{{route('social.show',$social_item->id)}}" class="btn btn-success col-lg-2 mr-2"> نمایش بده <i class="fa fa-eye"></i></a>
                                    @break
                                @case(1)
                                <a href="{{route('social.hide',$social_item->id)}}" class="btn btn-danger col-lg-2 mr-2"> مخفی کن <i class="fa fa-eye-slash"></i></a>
                                    @break
                                @default
                                    
                            @endswitch
                        </div> 
                        @endforeach

                       
                        <button class="btn btn-warning mt-4">بروزرسانی</button>
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

            



        </div>


    </section>
@endsection
