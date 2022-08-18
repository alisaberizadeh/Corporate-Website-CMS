@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>مدیریت   صفحات</h1>
                </div>

            </div>
        </div>

        <div class="row">

            <form action="{{ route('social.update') }}" method="POST" enctype="multipart/form-data"> @csrf @method('put')
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <h3 class="card-title"> لیست صفحات   </h3>
                    </div>

                    <div class="card-body">
                        <ul class="list-group ">

                            @foreach ($sections as $sections_item)
                                <li
                                    class="list-group-item bg-light text-dark d-flex mb-2 justify-content-between align-items-center">
                                    {{$sections_item->name_fa}}
                                    @switch($sections_item->status)
                                        @case(0)
                                    <a href="{{route('sections.show',$sections_item->id)}}" class="btn btn-sm btn-success text-white">فعال کن  </a>
                                            
                                            @break
                                        @case(1)
                                    <a href="{{route('sections.hide',$sections_item->id)}}" class="btn btn-sm btn-danger text-white">غیر فعال کن</a>
                                            
                                            @break                                            
                                    @endswitch
                                </li>
                            @endforeach



                        </ul>

                    </div>

                </div>

            </form>





        </div>


    </section>
@endsection
