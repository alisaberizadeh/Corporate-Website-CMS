@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>عناصر درباره ما</h1>
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
            

            <form action="{{route('about.elements.update')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">عناصر </h3>
                    </div>

                    <div class="card-body row">
                       @foreach ($elements as $elements_item)
                           
                        <div class="col-lg-4 row mb-4">
                            <label for="" class="col-lg-12"><i class="{{$elements_item->icon}}"></i> </label>
                            <input type="text" class="form-control " name="icon_{{$elements_item->id}}" value="{{$elements_item->icon}}">
                        </div> 
                        <div class="col-lg-4 row mb-4 mr-2">
                            <label for="" class="col-lg-12">عنوان </label>
                            <input type="text" class="form-control " value="{{$elements_item->title}}" name="title_{{$elements_item->id}}">
                        </div> 
                        <div class="col-lg-4 row mb-4 mr-2">
                            <label for="" class="col-lg-12">توضیح </label>
                            <input type="text" class="form-control " value="{{$elements_item->text}}" name="text_{{$elements_item->id}}">
                        </div> 

                         
                       @endforeach
                        
                       
               
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

            @if ($en == 1)
                
            <form action="{{route('about.elements.update.en')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">عناصر انگلیسی
                        <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">
                        </h3>
                    </div>

                    <div class="card-body row">
                       @foreach ($en_elements as $elements_item)
                           
                        <div class="col-lg-4 row mb-4">
                            <label for="" class="col-lg-12"><i class="{{$elements_item->icon}}"></i> </label>
                            <input type="text" class="form-control " name="en_icon_{{$elements_item->id}}" value="{{$elements_item->icon}}">
                        </div> 
                        <div class="col-lg-4 row mb-4 mr-2">
                            <label for="" class="col-lg-12">عنوان </label>
                            <input type="text" class="form-control " value="{{$elements_item->title}}" name="en_title_{{$elements_item->id}}">
                        </div> 
                        <div class="col-lg-4 row mb-4 mr-2">
                            <label for="" class="col-lg-12">توضیح </label>
                            <input type="text" class="form-control " value="{{$elements_item->text}}" name="en_text_{{$elements_item->id}}">
                        </div> 

                         
                       @endforeach
                        
                       
               
                        <button class="btn btn-warning col-lg-2 mt-4">بروزرسانی</button>

                        
                    </div>

                </div>

            </form>

            
            @endif



        </div>


    </section>
@endsection
