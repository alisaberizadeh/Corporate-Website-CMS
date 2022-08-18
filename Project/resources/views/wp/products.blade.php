@extends('wp.layouts.app')

@section('content')
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>محصولات </h1>
                </div>

            </div>
        </div>

        <div class="row">

            <div id="accordion" class="mt-3">

              <div class="card card-primary" style="border-radius: 0px">
                <div class="card-header" style="border-radius: 0px">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo_all">
                    همه محصولات <i class="fa fa-angle-down"></i>
                  </a>
                </div>
                <div id="collapseTwo_all" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <table class="table table-bordered">
                        <th>#</th>
                        <th>عنوان</th>
                        <th>تصویر</th>
                        <th>عملیات</th>

                        @foreach ($product as $product_item)
                            <tr>
                                <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                <td>{{$product_item->title}}</td>
                                <td><img src="{{asset($product_item->image)}}" style="width: 80px;" alt=""></td>
                                <td>
                                    <a href="{{route('products.edit',$product_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                    <a href="{{route('products.delete',$product_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>
                               
                                </td>
                            </tr>
                        @endforeach
                        
                    </table>
                  </div>
                </div>
              </div>
            

                @foreach ($cats as $item_cats)
                <div class="card card-primary" style="border-radius: 0px">
                    <div class="card-header" style="border-radius: 0px">
                      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo_{{$item_cats->id}}">
                        {{$item_cats->name}} <i class="fa fa-angle-down"></i>
                      </a>
                    </div>
                    <div id="collapseTwo_{{$item_cats->id}}" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        <table class="table table-bordered">
                            <th>#</th>
                            <th>عنوان</th>
                            <th>تصویر</th>
                            <th>عملیات</th>

                            @foreach ($product as $product_item)
                                @if ($product_item->cat == $item_cats->name)
                                <tr>
                                  <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$product_item->title}}</td>
                                    <td><img src="{{asset($product_item->image)}}" style="width: 80px;" alt=""></td>
                                    <td>
                                        <a href="{{route('products.edit',$product_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                        <a href="{{route('products.delete',$product_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>
                                   
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            
                        </table>
                      </div>
                    </div>
                  </div>
                
                @endforeach


                @if ($en == 1)
                <h1 class="mt-5 mb-5">محصولات انگلیسی</h1>
                <div class="card card-primary" style="border-radius: 0px">
                  <div class="card-header" style="border-radius: 0px">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwoalll">
                      All Products <i class="fa fa-angle-down"></i>
                    </a>
                  </div>
                  <div id="collapseTwoalll" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      <table class="table table-bordered">
                          <th>#</th>
                          <th>عنوان</th>
                          <th>تصویر</th>
                          <th>عملیات</th>

                          @foreach ($en_product as $product_item)
                              <tr>
                                <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                  <td>{{$product_item->title}}</td>
                                  <td><img src="{{asset($product_item->image)}}" style="width: 80px;" alt=""></td>
                                  <td>
                                      <a href="{{route('products.edit.en',$product_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                      <a href="{{route('products.delete.en',$product_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>
                                 
                                  </td>
                              </tr>
                          @endforeach
                          
                      </table>
                    </div>
                  </div>
                </div>
                @foreach ($en_cats as $item_cats)
                <div class="card card-primary" style="border-radius: 0px">
                    <div class="card-header" style="border-radius: 0px">
                      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo_{{$item_cats->id}}">
                        {{$item_cats->name}} <i class="fa fa-angle-down"></i>
                      </a>
                    </div>
                    <div id="collapseTwo_{{$item_cats->id}}" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        <table class="table table-bordered">
                            <th>#</th>
                            <th>عنوان</th>
                            <th>تصویر</th>
                            <th>عملیات</th>

                            @foreach ($en_product as $product_item)
                                @if ($product_item->cat == $item_cats->name)
                                <tr>
                                  <th class="col-lg-1" scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$product_item->title}}</td>
                                    <td><img src="{{asset($product_item->image)}}" style="width: 80px;" alt=""></td>
                                    <td>
                                        <a href="{{route('products.edit.en',$product_item->id)}}" class="btn btn-info float-right ml-1"><i class="fa fa-paint-brush"></i></a>
                                        <a href="{{route('products.delete.en',$product_item->id)}}" class="btn  btn-danger show_confirm"><i class="fa fa-trash"></i></a>
                                   
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            
                        </table>
                      </div>
                    </div>
                  </div>
                
                @endforeach
                @endif

      
              </div> 
 




        </div>


    </section>
@endsection
