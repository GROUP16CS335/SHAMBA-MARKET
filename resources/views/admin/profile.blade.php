
@extends('layouts.admin')
@section('content')
<div class="container">
<div class="card">
    <div class="card-body">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
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
                            <button type="submit" class="btn btn-primary">UPDATE PROFILE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
