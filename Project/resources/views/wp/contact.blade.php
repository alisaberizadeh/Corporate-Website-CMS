@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>تماس باما</h1>
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
           
           

            <form action="{{route('contact.update')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">عناصر </h3>
                    </div>

                    <div class="card-body row">
                       @foreach ($contact as $contact_item)
                           
                        <div class="col-lg-4 row mb-4">
                            <label for="" class="col-lg-12"><i class="{{$contact_item->icon}}"></i> </label>
                            <input type="text" class="form-control " name="icon_{{$contact_item->id}}" value="{{$contact_item->icon}}">
                        </div> 
                        <div class="col-lg-4 row mb-4 mr-2">
                            <label for="" class="col-lg-12">عنوان </label>
                            <input type="text" class="form-control " value="{{$contact_item->title}}" name="title_{{$contact_item->id}}">
                        </div> 

                        
                        <div class="col-lg-4 row mb-4 mr-2 ">
                            <label for="" class="col-lg-12">متن </label>
                            <input type="text" class="form-control " name="text_{{$contact_item->id}}" value="{{$contact_item->text}}" >
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

                </div>

            </form>

            @if ($en==1)
                
            <form action="{{route('contact.update.en')}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">عناصر انگلیسی
                        <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">
                            
                        </h3>
                    </div>

                    <div class="card-body row">
                       @foreach ($en_contact as $contact_item)
                           
                        <div class="col-lg-4 row mb-4">
                            <label for="" class="col-lg-12"><i class="{{$contact_item->icon}}"></i> </label>
                            <input type="text" class="form-control " name="en_icon_{{$contact_item->id}}" value="{{$contact_item->icon}}">
                        </div> 
                        <div class="col-lg-4 row mb-4 mr-2">
                            <label for="" class="col-lg-12">عنوان </label>
                            <input type="text" class="form-control " value="{{$contact_item->title}}" name="en_title_{{$contact_item->id}}">
                        </div> 

                        
                        <div class="col-lg-4 row mb-4 mr-2 ">
                            <label for="" class="col-lg-12">متن </label>
                            <input type="text" class="form-control " name="en_text_{{$contact_item->id}}" value="{{$contact_item->text}}" >
                        </div> 
 
                       @endforeach
                        
                       
               
                        <button class="btn btn-warning col-lg-2 mt-4">بروزرسانی</button>

                        
                    </div>
                    </div>

                </div>

            </form>

            
            @endif



        </div>


    </section>
@endsection
