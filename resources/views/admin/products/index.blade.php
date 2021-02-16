@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h4>Products</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>ID</th>
                        <th>VendorID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->vid}}</td>
                            <td>{{$product->pname}}</td>
                            <td>{{$product->pcat}}</td>
                            <td>{{$product->desc}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                            <a href="{{ url('a-products/'.$product->id) }}" class="badge badge-pill btn-primary px-3 py-2">EDIT</a>
                                <a href="" class="badge badge-pill btn-danger px-3 py-2">Delete</a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
