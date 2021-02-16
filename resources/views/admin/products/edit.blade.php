@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <form action="{{route('a-products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PATCH')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" value="{{$product->pname}}" name="pname" class="form-control" id="inputEmail4" placeholder="Product name">
                        </div>

                        <div class="form-group col-md-6">
                        <label for="category">Category</label>
                        <select id="inputState" name="pcategory" class="form-control">
                            <option selected value="{{$product->pcat}}">Choose...</option>
                            <option value="Fruits">Fruits</option>
                            <option value="Vegetables">Vegetables</option>
                            <option value="Grains">Grains</option>
                            <option value="Diary"> Diary</option>
                            <option value="Animal/Meat">Animal/Meat</option>
                            <option value="Fish">Fish</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group  col-md-6">
                            <label for="desc">Descriptions</label>
                            <input type="text" value="{{$product->desc}}" name="desc" class="form-control" id="" placeholder="Include units example 1@killo....">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price">Price</label>
                            <input type="number" value="{{$product->price}}" name="price" class="form-control" id="" placeholder="Enter price... Tsh">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
