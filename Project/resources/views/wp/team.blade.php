@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>مدیریت تیم</h1>

                </div>

            </div>
        </div>

        <div class="row">

                <div class="card card-primary mt-3 p-0">
                    <div class="card-header">
                        <h3 class="card-title">اعضا تیم </h3>
                    </div>

                    <div class="card-body">

                        <div class="col-lg-12 row mb-5">
                            <table class="table">
                                <th>#</th>
                                <th>تصویر</th>
                                <th>نام</th>
                                <th>سمت</th>
                                <th>عملیات</th>

                                @foreach ($team as $team_item)
                                    <tr>
                                        <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                        <td><img style="width: 50px;height:50px;border-radius: 500px" src="{{asset($team_item->avatar)}}" alt=""></td>
                                        <td>{{$team_item->name}}</td>
                                        <td>{{$team_item->level}}</td>
                                        <td>
                                            <a href="{{route('team.edit',$team_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                            <a href="{{route('team.delete',$team_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>

                                        </td>
                                    </tr>
                                @endforeach


                                
                               

                            </table>
                            @if (count($team) < 1)
                            <h4 class="text-center" style="margin-top: 30px"><strong>نتیجه ای یافت نشد !!!</strong>
                            </h4>
                        @endif
                        </div>


                    </div>

                </div>



                @if ($en == 1)
                <div class="card card-primary mt-3 p-0">
                    <div class="card-header">
                        <h3 class="card-title">اعضا تیم انگلیسی</h3>
                    </div>

                    <div class="card-body">

                        <div class="col-lg-12 row mb-5">
                            <table class="table">
                                <th>#</th>
                                <th>تصویر</th>
                                <th>نام</th>
                                <th>سمت</th>
                                <th>عملیات</th>

                                @foreach ($en_team as $team_item)
                                    <tr>
                                        <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                        <td><img style="width: 50px;height:50px;border-radius: 500px" src="{{asset($team_item->avatar)}}" alt=""></td>
                                        <td>{{$team_item->name}}</td>
                                        <td>{{$team_item->level}}</td>
                                        <td>
                                            <a href="{{route('team.edit.en',$team_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                            <a href="{{route('team.delete.en',$team_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>

                                        </td>
                                    </tr>
                                @endforeach


                                
                               

                            </table>
                            @if (count($team) < 1)
                            <h4 class="text-center" style="margin-top: 30px"><strong>نتیجه ای یافت نشد !!!</strong>
                            </h4>
                        @endif
                        </div>


                    </div>

                </div>

                @endif


        </div>


    </section>
@endsection
