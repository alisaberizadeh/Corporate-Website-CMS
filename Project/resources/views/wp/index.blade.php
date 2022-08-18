@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>اطلاعات کاربری من</h1>
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

            <form action="{{ route('me.update',auth()->user()->id) }}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">مدیر </h3>
                    </div>

                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">  نام من</label>
                            <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" required>
                        </div>
 
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">  ایمیل من </label>
                            <input type="email" name="email" class="form-control"  value="{{auth()->user()->email}}" required>
                        </div>
 

                        <div class="col-lg-6 row mb-4">
                            <label for="" class="col-lg-12">  کلمه عبور جدید</label>
                            <input type="password" name="password" class="form-control">
                        </div>
 

                        <div class="col-lg-6 row mb-4 mr-2">
                            <label for="" class="col-lg-12">  تکرار کلمه عبور </label>
                            <input type="password" name="password_confirmation" class="form-control" >
                        </div>
 
                        
  


                        <button class="btn btn-warning col-lg-2 mt-4">بروزرسانی</button>
                    </div>

                </div>

            </form>





        </div>


    </section>
@endsection
