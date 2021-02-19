@extends('layouts.vendor')

@section('content')
<div class="card">
    <div class="card-body">
        <form>
            <h3>Product Details</h3>
            <hr>
            <div class="form-row">
                <table class="table table-bordered table-striped">
                    <tr>
                        <thead>
                            <th><strong>Product ID</strong></th>
                            <th><strong>Product Name</strong></th>
                            <th><strong>Category</strong></th>
                            <th><strong>Price</strong></th>
                            <th><strong>Quantity</strong></th>
                        </thead>
                    </tr>

                    <tbody>
                        @foreach ($order->products as $product)
                                @if ($product->user->id == \Auth::user()->id)
                                    <tr>
                                    <td>{{\App\Models\User::find($product->id)->id}}</td>
                                    <td>{{$product->pname}}</td>
                                    <td>{{$product->pcat}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->pivot->qty}}</td>
                                    </tr>
                                @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="form-group  col-md-4">

                </div>
                <div class="form-group col-md-4">

                </div>
                <div class="form-group col-md-4">
                    <label for="price">Total Price</label>
                    <input type="text" name="price" class="form-control" id="" disabled>
                </div>

            </div>
            <br>
            <h3>Billing Address</h3>
            <hr>

            <div class="form-row">
                <div class="form-group col-md-6 input-sm">
                  <label for="inputEmail4">Firstname</label>
                <input type="fname" value="{{$order->order_detail->firstname}}" class="form-control" id="inputEmail4"   disabled>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Lastname</label>
                  <input type="lname" value="{{$order->order_detail->lastname}}" class="form-control" id="inputPassword4" disabled>
                </div>
              </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" value="{{$order->order_detail->email}}" class="form-control" id="inputEmail4"   disabled>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Phone</label>
                <input type="text" value="{{$order->order_detail->phone}}" class="form-control" id="inputPassword4"  disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address 1</label>
              <input type="text" value="{{$order->order_detail->address1}}" class="form-control" id="inputAddress"  disabled>
            </div>
            <div class="form-group">
              <label for="inputAddress2">Street</label>
              <input type="text" value="{{$order->order_detail->address2}}" class="form-control" id="inputAddress2"  disabled>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputCity">Country</label>
                <input type="text" value="{{$order->order_detail->country}}" class="form-control" id="inputCity" disabled>
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">Region</label>
                <input type="text" value="{{$order->order_detail->region}}" class="form-control" id="inputZip" disabled>
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">District</label>
                <input type="text" value="{{$order->order_detail->district}}" class="form-control"  id="inputZip" disabled>
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">Payment Method</label>
                <input type="text" value="{{$order->order_detail->pay_method}}" class="form-control" id="inputZip" disabled>
              </div>
            </div>
            <br>
            <hr>
          </form>
    </div>
</div>

@endsection
