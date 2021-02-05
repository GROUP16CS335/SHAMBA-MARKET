@extends('layouts.frontend')

@section('content')
<br>
    <div class="container py-4">
       <div class="row">
           @foreach ($products as $product )
           <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

            <!--Card image-->
            <div class="view overlay">
            <img src="{{asset('storage/productImages/'.$product->image)}}" class="card-img-top" alt="">
                <a>
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <!--Card image-->
            <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                <h5>{{$product->pname}}</h5>
                </a>


                <h4 class="font-weight-bold blue-text">
                <strong>{{$product->price}} Tsh</strong>
                </h4>

            </div>
            <!--Card content-->

            </div>
            <!--Card-->

            </div>
            <!--Grid column-->
            @endforeach
       </div>

           <!--Grid column-->

    </div>
@endsection
