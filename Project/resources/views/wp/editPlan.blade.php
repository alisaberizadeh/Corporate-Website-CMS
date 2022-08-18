@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>ویرایش اطلاعات طرح</h1>
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

            <form action="{{ route('plans.update',$plan->id) }}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">اطلاعات </h3>
                    </div>

                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* عنوان </label>
                            <input type="text" name="name" value="{{$plan->name}}" class="form-control" required>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* جزئیات</label>
                            <textarea name="text" class="form-control" required placeholder="با علامت - از هم جدا کنید">{{$plan->text}}</textarea>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* قیمت </label>
                            <input type="text" name="price"  value="{{$plan->price}}"  class="form-control" required>
                        </div>
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* نوع تمدید </label>
                            <select name="type" class="form-control">
                                <option value="{{$plan->type}}">--- {{$plan->type}} ---</option>
                                <option value="سالاته">سالاته</option>
                                <option value="ماهانه">ماهانه</option>
                                <option value="3 ماهه">3 ماهه</option>
                                <option value="6 ماهه">6 ماهه</option>
                            </select>
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
