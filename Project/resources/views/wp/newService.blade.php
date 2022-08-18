@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>افزودن سرویس جدید</h1>
                </div>

            </div>
        </div>

        <div class="row">

            <form action="{{route('services.create')}}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">اطلاعات </h3>
                    </div>

                    <div class="card-body row">
                       
                        <div class="col-lg-6 row mb-4">
                            <label for="" class="col-lg-12">عنوان </label>
                            <input type="text" name="name" value="{{old("name")}}" class="form-control" required>
                        </div> 
                       
                        <div class="col-lg-6 row mb-4 mr-2">
                            <label for="" class="col-lg-12">آیکون</label>
                            <input type="text" name="icon" placeholder="مثلا : fa fa-instagram" value="{{old("icon")}}" class="form-control" required>
                        </div> 
               
                        <div class="col-lg-12 row">
                            <label for="" class="col-lg-12">توضیحات</label>
                            <textarea  class="form-control" name="text" required>{{old("text")}}</textarea>
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
                    <form action="{{ route('services.create.en') }}" method="POST" enctype="multipart/form-data"> @csrf
                        <div class="card card-primary mt-3" style="overflow: hidden">
                            <div class="card-header" style="cursor: pointer;">
                                <h3 class="card-title collapsed" data-toggle="collapse" >اطلاعات سرویس انگلیسی
                                    <i class="fa fa-angle-down"></i></h3>
                            </div>

                                <div class="card-body row">

                                    <div class="col-lg-6 row mb-4">
                                        <label for="" class="col-lg-12">عنوان </label>
                                        <input type="text" name="en_name" value="{{old("en_name")}}" class="form-control" required>
                                    </div> 
                                   
                                    <div class="col-lg-6 row mb-4 mr-2">
                                        <label for="" class="col-lg-12">آیکون</label>
                                        <input type="text" name="en_icon" placeholder="مثلا : fa fa-instagram" value="{{old("en_icon")}}" class="form-control" required>
                                    </div> 
                           
                                    <div class="col-lg-12 row">
                                        <label for="" class="col-lg-12">توضیحات</label>
                                        <textarea  class="form-control" name="en_text" required>{{old("en_text")}}</textarea>
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
