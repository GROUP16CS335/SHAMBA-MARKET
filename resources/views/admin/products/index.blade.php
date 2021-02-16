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
                        <th></th>
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
                            </td>
                            <td>
                                <form action="{{route('a-products.destroy', $product->id)}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                                </form>
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
