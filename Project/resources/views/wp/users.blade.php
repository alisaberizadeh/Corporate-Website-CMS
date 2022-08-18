@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>  مدیران</h1>

                </div>

            </div>
        </div>

        <div class="row">

                <div class="card card-primary mt-3 p-0">
                    <div class="card-header">
                        <h3 class="card-title">اعضا </h3>
                    </div>

                    <div class="card-body">

                        <div class="col-lg-12 row mb-5">
                            <table class="table">
                                <th>#</th>
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>عملیات</th>

                                @foreach ($users as $users_item)
                                    <tr>
                                        <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                        <td>{{$users_item->name}}</td>
                                        <td>{{$users_item->email}}</td>
                                        <td>
                                            @if ($users_item->id != auth()->user()->id)
                                            <a href="{{route('users.delete',$users_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach


                                
                               

                            </table>
                             
                        </div>


                    </div>

                </div>






        </div>


    </section>
@endsection
