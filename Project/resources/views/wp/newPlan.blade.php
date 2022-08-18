@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>افزودن طرح جدید</h1>
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

            <form action="{{ route('plans.create') }}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">اطلاعات </h3>
                    </div>

                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* عنوان </label>
                            <input type="text" name="name" value="{{old("name")}}" class="form-control" required>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* جزئیات</label>
                            <textarea name="text" class="form-control" placeholder="با علامت - از هم جدا کنید"  required > {{old("text")}}</textarea>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* قیمت (تومان)</label>
                            <input type="text" name="price" class="form-control" value="{{old("price")}}" required>
                        </div>
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* نوع تمدید </label>
                            <select name="type" class="form-control">
                                <option value="null">--- انتخاب کنید ---</option>
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


            @if ($en == 1)
                

            <form action="{{ route('plans.create.en') }}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title">اطلاعات انگلیسی 
                            <img src="{{asset('/images/flag-en.jpg')}}" style="width: 25px;" alt="انگلسی">
                            
                        </h3>
                    </div>

                    <div class="card-body row">

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* عنوان </label>
                            <input type="text" name="en_name" value="{{old("en_name")}}" class="form-control" required>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* جزئیات</label>
                            <textarea name="en_text" class="form-control" required placeholder="با علامت - از هم جدا کنید"> {{old("en_text")}}</textarea>
                        </div>

                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* قیمت (تومان)</label>
                            <input type="text" name="en_price" class="form-control" value="{{old("en_price")}}" required>
                        </div>
                        <div class="col-lg-12 row mb-4">
                            <label for="" class="col-lg-12">* نوع تمدید </label>
                            <select name="en_type" class="form-control">
                                <option value="null">--- انتخاب کنید ---</option>
                                <option value="yearly">yearly</option>
                                <option value="monthly">monthly</option>
                                <option value="3 months">3 months</option>
                                <option value="6 months">6 months</option>
                            </select>
                        </div>



                        <button class="btn btn-warning col-lg-2 mt-4">ثبت</button>

                        
                    </div>

                </div>

            </form>

            @endif





        </div>


    </section>
@endsection
