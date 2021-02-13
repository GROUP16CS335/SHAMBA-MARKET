@extends('layouts.frontend')
@section('content')
    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                        <form class="needs-validation" novalidate method="POST">
                            {{@csrf_field()}}
                            @method('POST')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name *</label>
                                    <input type="text" name="fname" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name *</label>
                                    <input type="text" name="lname" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email Address *</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="">
                                <div class="invalid-feedback"> Please enter a valid email address for delivery updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Phone number *</label>
                                <input type="phone" name="phone" class="form-control" id="email" placeholder="">
                                <div class="invalid-feedback"> Please enter a valid phone number address for delivery updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address *</label>
                                <input type="text" name="address1" class="form-control" id="address" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address2">Address 2 *</label>
                                <input type="text" name="address2" class="form-control" id="address2" placeholder=""> </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Country *</label>
                                    <select name="country" class="wide w-100" id="country">
									<option value="Choose..." data-display="Select">Choose...</option>
									<option value="Tanzania">Tanzania</option>
								</select>
                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Region</label>
                                    <select name="region" class="wide w-100" id="state">
									<option data-display="Select">Choose...</option>
									<option value="Dar es Salaam">Dar es Salaam</option>
								</select>
                                    <div class="invalid-feedback"> Please provide a valid region. </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="state">District</label>
                                    <select name="district" class="wide w-100" id="state">
									<option data-display="Select">Choose...</option>
                                    <option value="Ilala">Ilala</option>
                                    <option value="Ubungo">Ubungo</option>
                                    <option value="Temeke">Temeke</option>
                                    <option value="Kinondoni">Kinondoni</option>
								</select>
                                    <div class="invalid-feedback"> Please provide a valid district. </div>
                                </div>
                            </div>
                            <hr class="mb-1">
                            <div class="title"> <span><h3>Payment</h3></span> </div>
                            <div class="d-block my-3">
                                <div class="form-check">
                                    <input id="credit" name="paymentMethod" value="M-Pesa" type="radio" class="form-check-input" checked required>
                                    <label  for="credit">Mpesa</label>
                                </div>
                                <div class="form-check">
                                    <input id="debit" name="paymentMethod" value="Tigo-Pesa" type="radio" class="form-check-input" required>
                                    <label  for="debit">TigoPesa</label>
                                </div>
                                <div class="form-check">
                                    <input id="paypal" name="paymentMethod" value="Airtel-Money" type="radio" class="form-check-input" required>
                                    <label  for="paypal">AirtelMoney</label>
                                </div>
                            </div>
                            <hr class="mb-1">

                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                    @if (Session::has('cart'))
                                        @foreach ($products as $product)
                                        <div class="rounded p-2 bg-light">
                                            <div class="media mb-2 border-bottom">
                                                <div class="media-body"> <a href="detail.html"> {{$product['item']->pname}}</a>
                                                    <div class="small text-muted">Price: {{number_format($product['item']->price)}} Tsh<span class="mx-2">|</span> Qty: {{number_format($product['qty'])}} <span class="mx-2">|</span> Subtotal: {{number_format($product['price'])}} Tsh</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"> {{number_format($totalPrice)}} Tsh </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Discount</h4>
                                    <div class="ml-auto font-weight-bold"> 0 Tsh </div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Coupon Discount</h4>
                                    <div class="ml-auto font-weight-bold"> 0 Tsh </div>
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
                                    <div class="ml-auto h5">{{number_format($totalPrice)}} Tsh</div>
                                </div>
                                <hr> </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> <button type="submit"  class="ml-auto btn hvr-hover">Place Order</button> </div>
                    </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
@endsection
