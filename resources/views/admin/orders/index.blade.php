@extends('layouts.admin')

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
                        <!--table to display orders to admin panel-->
                        <h4>Orders</h4>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>ID</th>
                                <th>UserID</th>
                                <th>Order Items</th>
                                <th>Total Quantity</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->user_id}}</td>
                                    <td>
                                         @foreach($order->products as $product)
                                          <span class="badge badge-primary">{{$product->pname}}</span>
                                         @endforeach

                                    </td>
                                    <td>
                                        @foreach($order->products as $product)
                                            {{$total = $product->price * $product->pivot->qty
                                            }}
                                            {{$total += $total}}
                                        @endforeach
                                    </td>
                                    <td>
                                    <a href="{{ url('a-orders/'.$order->id) }}" class="btn btn-success btn-sm">VIEW</a>
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
