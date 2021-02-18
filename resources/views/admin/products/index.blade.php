@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
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
                                <th><strong>ID</strong></th>
                                <th><strong>VendorID</strong></th>
                                <th><strong>Name</strong></th>
                                <th><strong>Category</strong></th>
                                <th><strong>Description</strong></th>
                                <th><strong>Price</strong></th>
                                <th><strong></strong></th>
                                <th><strong>Action</strong></th>
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
    </div>
</div>
@endsection
