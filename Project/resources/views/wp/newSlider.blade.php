@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>افزودن اسلاید جدید</h1>
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
            <form action="{{ route('slider.create') }}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">اسلاید </h3>
                    </div>

                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">تصویر (سایز پیشنهادی : 550 * 1350)</label>
                            <input type="file" class="form-control" name="image" required>
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
                <div id="accordion" class="mt-3">
                    <form action="{{ route('slider.create.en') }}" method="POST" enctype="multipart/form-data"> @csrf
                        <div class="card card-primary mt-3" style="overflow: hidden">
                            <div class="card-header" style="cursor: pointer;">
                                <h3 class="card-title collapsed" data-toggle="collapse" href="#collapseTwo">اسلاید انگلیسی
                             <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">

                                    <i class="fa fa-angle-down"></i></h3>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">

                                <div class="card-body row">

                                    <div class="col-lg-12 row mb-4">
                                        <label for="" class="col-lg-12">تصویر (سایز پیشنهادی : 550 * 1350)</label>
                                        <input type="file" class="form-control" name="en_image" required>
                                    </div>

                                    <script>
                                        CKEDITOR.replace('titleEn', {
                                            language: 'en',
                                            content: 'en',
                                        });
                                        CKEDITOR.replace('textEn', {
                                            language: 'en',
                                            content: 'en',
                                        });
                                    </script>




                                    <button class="btn btn-warning col-lg-2 mt-4">ثبت</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            @endif



        </div>


    </section>
@endsection
