@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>دسته بندی </h1>
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


            <div class="card card-primary col-md-4 mt-4 p-0">
                <div class="card-header">
                    <h3 class="card-title">لیست دسته ها </h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <th>#</th>
                        <th>نام</th>
                        <th>عملیات</th>

                        @foreach ($categorys as $categorys_item)
                            <tr>
                                <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $categorys_item->name }}</td>
                                <td>
                                    <a href="{{ route('Categorys.delete', $categorys_item->id) }}"
                                        class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
            <div class="card card-primary col-md-6 mt-4 p-0 mr-4">
                <div class="card-header">
                    <h3 class="card-title">افزودن دسته جدید </h3>
                </div>
                <div class="card-body row">
                    <div class="col-lg-12 row mb-4">
                        <form action="{{route('Categorys.create')}}" method="POST"> @csrf

                            <label for="" class="col-lg-12">* نام </label>
                            <input type="text" name="name" class="form-control" required>

                            <button class="btn btn-warning mt-3">ثبت</button>
                            
                        </form>
                    </div>
                </div>
            </div>




            @if ($en == 1)
                
            <div class="card card-primary col-md-4 mt-4 p-0">
                <div class="card-header">
                    <h3 class="card-title">لیست دسته های انگلیسی</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <th>#</th>
                        <th>نام</th>
                        <th>عملیات</th>

                        @foreach ($en_categorys as $categorys_item)
                            <tr>
                                <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $categorys_item->name }}</td>
                                <td>
                                    <a href="{{ route('Categorys.delete.en', $categorys_item->id) }}"
                                        class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
            <div class="card card-primary col-md-6 mt-4 p-0 mr-4">
                <div class="card-header">
                    <h3 class="card-title">افزودن دسته جدید انگلیسی </h3>
                </div>
                <div class="card-body row">
                    <div class="col-lg-12 row mb-4">
                        <form action="{{route('Categorys.create.en')}}" method="POST"> @csrf

                            <label for="" class="col-lg-12">* نام </label>
                            <input type="text" name="name" class="form-control" required>

                            <button class="btn btn-warning mt-3">ثبت</button>
                            
                        </form>
                    </div>
                </div>
            </div>

            @endif



        </div>


    </section>
@endsection
