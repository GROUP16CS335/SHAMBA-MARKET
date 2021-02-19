@extends('layouts.vendor')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4>Orders</h4>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th><strong>Order ID</strong></th>
                                <th><strong>Name</strong></th>
                                <th><strong>Order Items</strong></th>
                                <th><strong>Total Price</strong></th>
                                <th><strong>Action</strong></th>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->user->name}}</td>
                                        <td>
                                            @foreach ($order->products as $product)
                                                    @if ($product->user->id == \Auth::user()->id)
                                                    <span class="badge badge-primary">{{$product->pname}}</span>
                                                    @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($order->products as $product)
                                                {{$product->price * $product->pivot->qty
                                                }}
                                            @endforeach
                                        </td>
                                        <td>
                                        <a href="{{ url('v-orders/'.$order->id) }}" class="btn btn-success btn-sm">VIEW</a>
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
