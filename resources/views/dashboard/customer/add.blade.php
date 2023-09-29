
@extends('layouts.dashboard.app')

@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New Customer</h4>
                  <p class="card-description">
                    please enter information below
                  </p>
                  <hr>
                  <form class="forms-sample" action="{{ route('customer.store') }}" method="post">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputName1">Company</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="company">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Contact Person</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="contact">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email Address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Phone</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Address</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">City</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="city">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">State</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="state">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Postal Code</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="postal">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Country</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="country">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Add Customer</button>
               
                  </form>
                </div>
              </div>
            </div>
@endsection