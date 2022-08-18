@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>ویرایش عضو تیم</h1>
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

            <form action="{{route('team.update',$Team->id)}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">اطلاعات </h3>
                    </div>

                    <div class="card-body row">
                       
                        <div class="col-lg-6 row mb-4">
                            <label for="" class="col-lg-12">* نام </label>
                            <input type="text" name="name" value="{{$Team->name}}" class="form-control" required>
                        </div> 
                       
                        <div class="col-lg-6 row mb-4 mr-2">
                            <label for="" class="col-lg-12">* سمت</label>
                            <input type="text" name="level" value="{{$Team->level}}"  class="form-control" required>
                        </div> 
                        
                        <div class="col-lg-6 row mb-4">
                            <label for="" class="col-lg-12">اینستاگرام</label>
                            <input type="text" name="instagram" value="{{$Team->instagram}}"  class="form-control" value="#" required>
                        </div> 

                        
                        <div class="col-lg-6 row mb-4 mr-2">
                            <label for="" class="col-lg-12">لینکدین</label>
                            <input type="text" name="linkedin" value="{{$Team->linkedin}}"  class="form-control" value="#"  required>
                        </div> 


                        <div class="col-lg-6 row mb-4">
                            <label for="" class="col-lg-12">گیت هاب</label>
                            <input type="text" name="github" value="{{$Team->github}}"  class="form-control" value="#"  required>
                        </div> 


                        <div class="col-lg-6 row mb-4 mr-2">
                            <label for="" class="col-lg-12">  توییتر</label>
                            <input type="text" name="twitter"  value="{{$Team->twitter}}" class="form-control" value="#"  required>
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">  تصویر</label>
                            <img style="width:90px ;border-radius: 3px;margin-bottom: 5px;" src="{{asset($Team->avatar)}}" alt="">
                            <input type="file" name="avatar"  class="form-control">
                            <input type="hidden" name="avatar_hidden" value="{{$Team->avatar}}" id="">
                        </div> 


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
