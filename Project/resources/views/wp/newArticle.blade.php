@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>افزودن مقاله جدید</h1>
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

            <form action="{{ route('blog.create') }}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">مقاله </h3>
                    </div>

                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* عنوان </label>
                            <input type="text" name="name" class="form-control" value="{{old("name")}}" required>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* تصویر 
                                <span class="text-center" style="direction: ltrcolor: #a2a2a2;font-size: 13px;">(  png |  jpg |  jpeg |  gif )</span>
                            </label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* کلمات کلیدی ( سئو ) </label>
                            <input type="text" name="keywords" class="form-control" value="{{old("keywords")}}" placeholder='کلمات را با علامت "," از هم جدا کنید' required>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* متن</label>
                            <textarea name="text" class="form-control" required>{{old("text")}}</textarea>
                        </div>

 
                        <script>
                            CKEDITOR.replace('text', {
                                language: 'fa',
                                content: 'fa',
                            });
                        </script>




                        <button class="btn btn-warning col-lg-2 mt-4">ثبت</button>
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
            <form action="{{ route('blog.create.en') }}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">مقاله انگلیسی
                            <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">
                        </h3>
                    </div>

                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* عنوان </label>
                            <input type="text" name="en_name" class="form-control" value="{{old("en_name")}}" required>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* تصویر 
                                <span class="text-center" style="direction: ltrcolor: #a2a2a2;font-size: 13px;">(  png |  jpg |  jpeg |  gif )</span>
                            </label>
                            <input type="file" name="en_image" class="form-control" required>
                        </div>
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* کلمات کلیدی ( سئو ) </label>
                            <input type="text" name="en_keywords" class="form-control" value="{{old("en_keywords")}}" placeholder='کلمات را با علامت "," از هم جدا کنید' required>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* متن</label>
                            <textarea name="en_text" class="form-control" required>{{old("en_text")}}</textarea>
                        </div>

 
                        <script>
                            CKEDITOR.replace('en_text', {
                                language: 'en',
                                content: 'en',
                            });
                        </script>




                        <button class="btn btn-warning col-lg-2 mt-4">ثبت</button>
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


            @endif




        </div>


    </section>
@endsection
