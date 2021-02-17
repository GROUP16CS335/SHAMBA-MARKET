@extends('layouts.vendor')

@section('content')
<div class="container">
    <a href="{{url('/add-products')}}"><button class="btn btn-primary">ADD PRODUCT</button></a>

    <div class="row">
        <div class="col-md-12">
        <br>
            <div class="card">
                <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4>Your Products</h4>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th><strong>ID</strong></th>
                                <th><strong>ProductName</strong></th>
                                <th><strong>Category</strong></th>
                                <th><strong>Description</strong></th>
                                <th><strong>Price</strong></th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->pname}}</td>
                                    <td>{{$product->pcat}}</td>
                                    <td>{{$product->desc}}</td>
                                    <td>
                                    <a href="{{ url('products/'.$product->id) }}" class="badge badge-pill btn-primary px-3 py-2">EDIT</a>
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
</div>
@endsection
