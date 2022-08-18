@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>افزودن مدیر جدید</h1>
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

            <form action="{{ route('users.create') }}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">مدیر </h3>
                    </div>

                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* نام </label>
                            <input type="text" name="name" value="{{old("name")}}" class="form-control" required>
                        </div>
 
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* ایمیل </label>
                            <input type="email" name="email" value="{{old("email")}}" class="form-control" required>
                        </div>
 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* کلمه عبور </label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* تکرار کلمه عبور </label>
                            <input type="password" name="password_confirmation" class="form-control" required>
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





        </div>


    </section>
@endsection
