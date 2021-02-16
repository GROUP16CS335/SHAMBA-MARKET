@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <form>
            <h3>Product Details</h3>
            <hr>
            <div class="form-row">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>VendorID</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </thead>
                    <tbody>

                            <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
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
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Firstname</label>
                  <input type="fname" class="form-control" id="inputEmail4"   disabled>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Lastname</label>
                  <input type="lname" class="form-control" id="inputPassword4" disabled>
                </div>
              </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4"   disabled>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Phone</label>
                <input type="number" class="form-control" id="inputPassword4"  disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address 1</label>
              <input type="text" class="form-control" id="inputAddress"  disabled>
            </div>
            <div class="form-group">
              <label for="inputAddress2">Street</label>
              <input type="text" class="form-control" id="inputAddress2"  disabled>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputCity">Country</label>
                <input type="text" class="form-control" id="inputCity" disabled>
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">Region</label>
                <input type="text" class="form-control" id="inputZip" disabled>
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">District</label>
                <input type="text" class="form-control" id="inputZip" disabled>
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">Payment Method</label>
                <input type="text" class="form-control" id="inputZip" disabled>
              </div>
            </div>
          </form>
    </div>
</div>

@endsection
