@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>تنظیمات صفحه توضیح سرویس</h1>
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
            <form action="{{route('sections.srvices.single.update',$sevice_bg->id)}}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">بخش سرویس  </h3>
                    </div>

                    <div class="card-body">
  
                        <div class="col-lg-12 row mb-5">
                            <label for="" class="col-lg-12">تصویر زمینه</label>
                            <img src="{{asset($sevice_bg->src)}}" style="width: 140px;margin-bottom: 9px;" alt=""><br>
                            <input type="file" name="background"  class="form-control">
                            <input type="hidden" name="hidden_background" value="{{$sevice_bg->src}}" class="form-control" required>
                        </div> 

                        <button class="btn btn-warning mt-4">بروزرسانی</button>
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
