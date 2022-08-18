@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>افزودن نمونه کار جدید</h1>
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
            <form action="{{route('portfolio.create')}}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">نمونه کار </h3>
                    </div>

                    <div class="card-body row">
                       
                       
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">تصویر </label>
                            <input type="file" class="form-control" name="image" required>
                        </div> 

                        
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">اسم نمونه کار </label>
                            <input type="text" class="form-control" name="name"  value="{{old("name")}}" required>
                        </div> 

                        
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">لینک </label>
                            <input type="text" class="form-control" name="link" value="{{old("link")}}" required>
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



            @if ($en  == 1)
                
            <form action="{{route('portfolio.create.en')}}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">نمونه کار انگلیسی
                            <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">
                        </h3>
                    </div>

                    <div class="card-body row">
                       
                       
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">تصویر </label>
                            <input type="file" class="form-control" name="en_image" required>
                        </div> 

                        
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">اسم نمونه کار </label>
                            <input type="text" class="form-control" name="en_name"  value="{{old("en_name")}}" required>
                        </div> 

                        
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">لینک </label>
                            <input type="text" class="form-control" name="en_link" value="{{old("en_link")}}" required>
                        </div> 

        
               
                        <button class="btn btn-warning col-lg-2 mt-4">ثبت</button>
            
                        
                    </div>

                </div>

            </form>

            @endif

            



        </div>


    </section>
@endsection
