@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>   بخش فوتر </h1>
                </div>

            </div>
        </div>

        <div class="row">

            <form action="{{route('footer.update')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">فوتر </h3>
                    </div>

                    <div class="card-body">
                       
                        <div class="col-lg-12 row mb-3">
                            <label for="" class="col-lg-12">متن کپی رایت</label>
                            <input type="text" name="copy_text" value="{{$Footer_Information->copy_text}}" class="form-control " required>
                        </div> 
                        <div class="col-lg-12 row mb-3">
                            <label for="" class="col-lg-12">عنوان</label>
                           <textarea name="text" id="" cols="30" rows="10" class="form-control">{{$Footer_Information->text}}</textarea>
                        </div> 
                        <div class="col-lg-12 row mb-3">
                            <label for="" class="col-lg-12">تعداد پست برای نمایش </label>
                            <input type="number" name="count_post" value="{{$Footer_Information->count_post}}" class="form-control col-lg-3 text-center" required>
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
            
            @if ($en == 1)
                
            <form action="{{route('footer.update.en')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">فوتر انگلیسی
                            <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">
                        </h3>
                    </div>

                    <div class="card-body">
                       
                        <div class="col-lg-12 row mb-3">
                            <label for="" class="col-lg-12">متن کپی رایت</label>
                            <input type="text" name="en_copy_text" value="{{$en_Footer_Information->copy_text}}" class="form-control text-left" required>
                        </div> 
                        <div class="col-lg-12 row mb-3">
                            <label for="" class="col-lg-12">عنوان</label>
                           <textarea name="en_text" id="" cols="30" rows="10" class="form-control text-left">{{$en_Footer_Information->text}}</textarea>
                        </div> 
                        <div class="col-lg-12 row mb-3">
                            <label for="" class="col-lg-12">تعداد پست برای نمایش </label>
                            <input type="number" name="en_count_post" value="{{$en_Footer_Information->count_post}}" class="form-control col-lg-3 text-center" required>
                        </div> 


                        <button class="btn btn-warning mt-4">بروزرسانی</button>
            
                        
                    </div>

                </div>

            </form>
            @endif
            



        </div>


    </section>
@endsection
