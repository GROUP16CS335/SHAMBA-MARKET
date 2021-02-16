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
                <h4>Registered Users</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th></th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role_as}}</td>
                            <td>
                            <a href="{{ url('users/'.$user->id) }}" class="badge badge-pill btn-primary px-3 py-2">EDIT</a>
                            </td>
                            <td>
                                <form action="{{route('users.destroy', $user->id)}}" method="POST" enctype="multipart/form-data">
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
