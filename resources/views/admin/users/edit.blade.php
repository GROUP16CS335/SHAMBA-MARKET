@extends('layouts.admin')

@section('content')
<div class="container">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <!--form to edit user in system-->
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
                                    <option value="">--Select role--</option>
                                    <option {{$user->role_as=='admin' ? 'selected':''}} value="admin">Admin</option>
                                    <option {{$user->role_as=='user' ? 'selected':''}} value="user">User</option>
                                    <option {{$user->role_as=='vendor' ? 'selected':''}} value="vendor">Vendor</option>
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
</div>
</div>
@endsection
