@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>افزودن محصول جدید</h1>
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
            <form action="{{route('products.create')}}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">محصول </h3>
                    </div>

                    <div class="card-body row">
                       
                       
                       
                        
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">عنوان </label>
                            <input type="text" class="form-control" value="{{old("title")}}" name="title" required>
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">تصویر </label>
                            <input type="file" class="form-control" name="image" required>
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">دسته بندی </label>
                            <select  class="form-control" name="cat">
                                <option value="null">--- انتخاب کنید ---</option>
                                @foreach ($cat as $cat_item)
                                    <option value="{{$cat_item->name}}">{{$cat_item->name}}</option>
                                @endforeach
                            </select>
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* کلمات کلیدی ( سئو ) </label>
                            <input type="text" class="form-control"  name="keyworlds" value="{{old("keyworlds")}}" placeholder='کلمات را با علامت "," از هم جدا کنید' required>
                        </div> 


                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">توضیحات </label>
                            <textarea name="text" id="text" required> {{old("text")}}</textarea>
                        </div> 
                        <script>
                            CKEDITOR.replace('text', {
                                language: 'fa',
                                content: 'fa',
                            });
                        </script>

        
               
                        <button class="btn btn-warning col-lg-2 mt-4">ذخیره</button>
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
            <form action="{{route('products.create.en')}}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">محصول انگلیسی
                             <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">
                            </h3>
                    </div>

                    <div class="card-body row">
                       
                       
                       
                        
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">عنوان </label>
                            <input type="text" class="form-control text-left" value="{{old("en_title")}}" name="en_title" required>
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">تصویر </label>
                            <input type="file" class="form-control" name="en_image" required>
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">دسته بندی </label>
                            <select  class="form-control" name="en_cat">
                                <option value="null">--- انتخاب کنید ---</option>
                                @foreach ($en_cat as $cat_item)
                                    <option value="{{$cat_item->name}}">{{$cat_item->name}}</option>
                                @endforeach
                            </select>
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* کلمات کلیدی ( سئو ) </label>
                            <input type="text" class="form-control text-left"  name="en_keyworlds" value="{{old("en_keyworlds")}}" placeholder='کلمات را با علامت "," از هم جدا کنید' required>
                        </div> 


                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">توضیحات </label>
                            <textarea name="en_text" id="en_text" required> {{old("en_text")}}</textarea>
                        </div> 
                        <script>
                            CKEDITOR.replace('en_text', {
                                language: 'en',
                                content: 'en',
                            });
                        </script>

        
               
                        <button class="btn btn-warning col-lg-2 mt-4">ذخیره</button>
    
                    </div>

                </div>

            </form>

            @endif
            



        </div>


    </section>
@endsection
