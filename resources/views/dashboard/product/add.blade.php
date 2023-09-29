
@extends('layouts.dashboard.app')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Product</h4>
                  <p class="card-description">
                    please enter information below
                  </p>
                  <hr>
                  <form class="forms-sample" action="{{ route('products.store') }}" method="post">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Details</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="details">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Price</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="price">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Add Product</button>
               
                  </form>
                </div>
              </div>
            </div>
@endsection