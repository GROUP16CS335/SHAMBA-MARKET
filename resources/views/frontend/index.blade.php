

@extends('layouts.frontend')
@section('content')
@include('layouts.inc.slider')
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="title-all text-center">
            <h1>PRODUCTS</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="special-menu text-center">
            <div class="button-group filter-button-group">
                <button class="active" data-filter="*">All</button>
                <button data-filter=".top-featured">Vegetables</button>
                <button data-filter=".best-seller">Fruits</button>
            </div>
        </div>
    </div>
</div>  
<div class="container py-4">
    <div class="row">
        @foreach ($products as $product )
        <div class="col-lg-3 col-md-6 special-grid top-featured ">
            <div class="products-single fix">
                <div class="box-img-hover">
                    <div class="type-lb">
                        <p class="new">New</p>
                    </div>
                    <img src="{{asset('storage/productImages/'.$product->image)}}" class="img-fluid" alt="Image">
                    <div class="mask-icon">
                        <a class="cart" href="#">Add to Cart</a>
                    </div>
                </div>
                <div class="why-text">
                    <h4>{{$product->pname}}</h4>
                    <h5> {{$product->price}} Tsh</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>

        <!--Grid column-->

</div>
@endsection
