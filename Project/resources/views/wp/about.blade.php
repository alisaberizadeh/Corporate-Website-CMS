@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1> درباره ما </h1>
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
           
            

            <form action="{{route('about.update')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                    <h3 class="card-title"> متن درباره ما </h3>

                    </div>

                    <div class="card-body row">
                       
                           
                        <div class="col-lg-12 row mb-4">
                             <textarea name="text" id="" cols="30" rows="10" class="form-control">{{$about->text}}</textarea>
                        </div> 
                         
 
                        <script> 
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

                </div>

            </form>

            
            @if ($en == 1)
                
            <form action="{{route('about.update.en')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                    <h3 class="card-title"> متن درباره ما انگلیسی
                        <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">
                    </h3>

                    </div>

                    <div class="card-body row">
                       
                           
                        <div class="col-lg-12 row mb-4">
                             <textarea name="en_text" id="" cols="30" rows="10" class="form-control">{{$en_about->text}}</textarea>
                        </div> 
                         
 
                        <script> 
                            CKEDITOR.replace('en_text', {
                                language: 'en',
                                content: 'en',
                            });
                        </script>
                       
               
                        <button class="btn btn-warning col-lg-2 mt-4">بروزرسانی</button>
 
                    </div>
                    </div>

                </div>

            </form>

            @endif


        </div>


    </section>
@endsection
