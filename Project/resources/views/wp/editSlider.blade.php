@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>ویرایش اسلاید </h1>
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
            <form action="{{route('slider.update',$Slider->id)}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">اسلاید </h3>
                    </div>

                    <div class="card-body row">
                    
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">تصویر </label>
                            <img src="{{asset($Slider->image)}}" style="width: 100px;margin-bottom: 7px;" alt="">
                            <input type="file" class="form-control" name="image" required>
                            <input type="hidden" name="hidden_image" value="{{$Slider->image}}" required>
                        </div> 

                        <script>
                            CKEDITOR.replace('title', {
                                language: 'fa',
                                content: 'fa',
                            });
                            CKEDITOR.replace('text', {
                                language: 'fa',
                                content: 'fa',
                            });
                        </script>

                       
                       
               
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

            



        </div>


    </section>
@endsection
