@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>تنظیمات بخش خدمات</h1>
                </div>

            </div>
        </div>

        <div class="row">

            <form action="{{route('sections.services.update',$services->id)}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">خدمات </h3>
                    </div>

                    <div class="card-body">
                       
                        <div class="col-lg-12 row mb-5">
                            <label for="" class="col-lg-12">نام بخش</label>
                            <input type="text" name="name_fa" value="{{$services->name_fa}}" class="form-control col-lg-8" required>
                        </div> 
                        <div class="col-lg-12 row mb-5">
                            <label for="" class="col-lg-12">عنوان</label>
                            <input type="text" name="title" value="{{$services->title}}" class="form-control col-lg-8" required>
                        </div> 
                        <div class="col-lg-12 row mb-5">
                            <label for="" class="col-lg-12">تعداد آیتم نمایش</label>
                            <input type="number" name="count" value="{{$services->count}}" class="form-control col-lg-3 text-center" required>
                        </div> 


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
