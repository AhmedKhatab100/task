
@extends('layouts.dashboard.app')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Customer</h4>
                  <hr>
                  <form class="forms-sample" action="{{ route('customer.update',$customer->id) }}" method="PUT">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                    <div class="form-group">
                      <label for="exampleInputName1">Company</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="company" value="{{$customer->company}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Contact Person</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="contact" value="{{$customer->contact}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email Address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" name="email" value="{{$customer->email}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Phone</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="phone" value="{{$customer->phone}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Address</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="address" value="{{$customer->address}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">City</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="city" value="{{$customer->city}}"> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">State</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="state" value="{{$customer->state}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Postal Code</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="postal" value="{{$customer->postal}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Country</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="country" value="{{$customer->country}}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update Customer</button>
               
                  </form>
                </div>
              </div>
            </div>
@endsection