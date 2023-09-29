
@extends('layouts.dashboard.app')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Product</h4>
                  <hr>
                  <form class="forms-sample" action="{{ route('products.update',$product->id) }}" method="PUT">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$product->name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Detalis</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="details" value="{{$product->details}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Price</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" name="price" value="{{$product->price}}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update Product</button>
                  </form>
                </div>
              </div>
            </div>
@endsection