@extends('layouts.frontend')
@section('content')

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        @if (Session::has('cart'))
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            @foreach ($products as $product)
                            <tbody>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
                                        <img class="img-fluid" src="{{asset('storage/productImages/'.$product['item']->image)}}" alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                            {{$product['item']->pname}}
                                        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p>{{number_format($product['item']->price) }} Tsh</p>
                                    </td>
                                    <td class="quantity-box"><input type="number" size="4" value="{{$product['qty']}}" min="0" step="1" class="c-input-text qty text"></td>
                                    <td class="total-pr">
                                        <p>{{number_format($product['price']) }} Tsh</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="#">
                                        <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        @else

                        @endif

                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold">{{number_format($totalPrice)}} Tsh</div>
                        </div>
                        <div class="d-flex">
                            <h4>Discount</h4>
                            <div class="ml-auto font-weight-bold"> 0 Tsh</div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Coupon Discount</h4>
                            <div class="ml-auto font-weight-bold"> 0 Tsh</div>
                        </div>
                        <div class="d-flex">
                            <h4>Tax</h4>
                            <div class="ml-auto font-weight-bold"> 0 Tsh </div>
                        </div>
                        <div class="d-flex">
                            <h4>Delivery Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"> {{number_format($totalPrice)}} /=</div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="/checkout" class="ml-auto btn btn-primary">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
@endsection
