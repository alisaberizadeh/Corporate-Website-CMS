@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>ویرایش مقاله انگلیسی</h1>
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

            <form action="{{ route('blog.update.en',$Blog->id) }}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">مقاله </h3>
                    </div>

                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* عنوان </label>
                            <input type="text" name="name" value="{{$Blog->name}}" class="form-control" required>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* تصویر </label>
                            <img src="{{asset($Blog->image)}}" style="width: 100px;border-radius: 3px ;margin-bottom: 5px;" alt="">
                            <input type="file" name="image" class="form-control" >
                            <input type="hidden" name="image_hidden"  value="{{$Blog->image}}" >
                        </div>
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* کلمات کلیدی ( سئو ) </label>
                            <input type="text" name="keywords" class="form-control"  value="{{$Blog->keywords}}"  placeholder='کلمات را با علامت "," از هم جدا کنید' required>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* متن</label>
                            <textarea name="text" class="form-control" required>{{$Blog->text}} </textarea>
                        </div>

 
                        <script>
                            CKEDITOR.replace('text', {
                                language: 'fa',
                                content: 'fa',
                            });
                        </script>




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
