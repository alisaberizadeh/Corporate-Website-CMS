@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>افزودن عضو جدید</h1>
                </div>

            </div>
        </div>

        <div class="row">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{route('team.create')}}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">اطلاعات </h3>
                    </div>

                    <div class="card-body row">
                       
                        <div class="col-lg-6 row mb-4">
                            <label for="" class="col-lg-12">* نام </label>
                            <input type="text" name="name" value="{{old("name")}}" class="form-control" required>
                        </div> 
                       
                        <div class="col-lg-6 row mb-4 mr-2">
                            <label for="" class="col-lg-12">* سمت</label>
                            <input type="text" name="level" value="{{old("level")}}" class="form-control" required>
                        </div> 
                        
                        <div class="col-lg-6 row mb-4">
                            <label for="" class="col-lg-12">اینستاگرام</label>
                            <input type="text" name="instagram" class="form-control" value="#" required>
                        </div> 

                        
                        <div class="col-lg-6 row mb-4 mr-2">
                            <label for="" class="col-lg-12">لینکدین</label>
                            <input type="text" name="linkedin" class="form-control" value="#"  required>
                        </div> 


                        <div class="col-lg-6 row mb-4">
                            <label for="" class="col-lg-12">گیت هاب</label>
                            <input type="text" name="github" class="form-control" value="#"  required>
                        </div> 


                        <div class="col-lg-6 row mb-4 mr-2">
                            <label for="" class="col-lg-12">  توییتر</label>
                            <input type="text" name="twitter" class="form-control" value="#"  required>
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">  تصویر</label>
                            <input type="file" name="avatar" class="form-control" required>
                        </div> 


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
            <form action="{{route('team.create.en')}}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">اطلاعات انگلیسی 

                            <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">

                        </h3>
                        
                    </div>

                    <div class="card-body row">
                       
                        <div class="col-lg-6 row mb-4">
                            <label for="" class="col-lg-12">* نام </label>
                            <input type="text" name="en_name" value="{{old("name")}}" class="form-control" required>
                        </div> 
                       
                        <div class="col-lg-6 row mb-4 mr-2">
                            <label for="" class="col-lg-12">* سمت</label>
                            <input type="text" name="en_level" value="{{old("level")}}" class="form-control" required>
                        </div> 
                        
                        <div class="col-lg-6 row mb-4">
                            <label for="" class="col-lg-12">اینستاگرام</label>
                            <input type="text" name="en_instagram" class="form-control" value="#" required>
                        </div> 

                        
                        <div class="col-lg-6 row mb-4 mr-2">
                            <label for="" class="col-lg-12">لینکدین</label>
                            <input type="text" name="en_linkedin" class="form-control" value="#"  required>
                        </div> 


                        <div class="col-lg-6 row mb-4">
                            <label for="" class="col-lg-12">گیت هاب</label>
                            <input type="text" name="en_github" class="form-control" value="#"  required>
                        </div> 


                        <div class="col-lg-6 row mb-4 mr-2">
                            <label for="" class="col-lg-12">  توییتر</label>
                            <input type="text" name="en_twitter" class="form-control" value="#"  required>
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">  تصویر</label>
                            <input type="file" name="en_avatar" class="form-control" required>
                        </div> 


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
