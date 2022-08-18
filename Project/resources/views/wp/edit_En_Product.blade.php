@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>ویرایش محصول </h1>
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
            <form action="{{route('products.update.en',$product->id)}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">محصول </h3>
                    </div>

                    <div class="card-body row">
                       
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">عنوان </label>
                            <input type="text" class="form-control"  name="title" value="{{$product->title}}" required>
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">تصویر </label>
                            <img src="{{asset($product->image)}}" style="width: 150px;margin-bottom: 10px;" alt="">
                            <input type="file" class="form-control" name="image"  >
                            <input type="hidden" name="hidden_image" value="{{$product->image}}" >
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">دسته بندی </label>
                            <select  class="form-control" name="cat">
                                <option value="{{$product->cat}}">--- {{$product->cat}} ---</option>
                                @foreach ($cat as $cat_item)
                                    <option value="{{$cat_item->name}}">{{$cat_item->name}}</option>
                                @endforeach
                            </select>
                        </div> 

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* کلمات کلیدی ( سئو ) </label>
                            <input type="text" class="form-control"  name="keyworlds" value="{{$product->keyworlds}}" placeholder='کلمات را با علامت "," از هم جدا کنید' required>
                        </div> 


                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">توضیحات </label>
                            <textarea name="text" id="text" required>{{$product->text}}</textarea>
                        </div> 
                        <script>
                            CKEDITOR.replace('text', {
                                language: 'en',
                                content: 'en',
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

            </form>

            



        </div>


    </section>
@endsection
