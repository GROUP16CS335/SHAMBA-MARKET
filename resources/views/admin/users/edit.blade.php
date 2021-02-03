@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
            <form action="{{route('users.update', $user->id)}}" method="POST">
                {{ csrf_field() }}
                @method('PATCH')
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="" value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="" class="form-control form-inline" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="roles">Change role</label>
                        <div class="col-sm-12">
                            <select name="roles" id="" class="form-control form-inline">
                                <option selected>--Select Role--</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                                <option value="vendor">Vendor</option>
                            </select>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary">CHANGE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
