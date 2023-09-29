@extends('layouts.dashboard.app')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Customer Table</h4>
                  <hr>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Company</th>
                            <th>Contact Person</th>
                            <th>Email Address</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Postal Code</th>
                            <th>Country</th>
                            <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                      @foreach($customers as $customer)

                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->company}}</td>
                            <td>{{$customer->contact}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->city}}</td>
                            <td>{{$customer->state}}</td>
                            <td>{{$customer->postal}}</td>
                            <td>{{$customer->country}}</td>
                            <td>
                                <a  class="btn btn-primary btn-icon-text" href="{{route('customer.edit',$customer->id)}}">
                                <i class="typcn typcn-document btn-icon-append"></i>
                                Edit 
                                </a>
                                <a  class="btn btn-danger btn-icon-text" data-toggle="modal" href="#delete{{$customer->id}}">
                                <i class="typcn typcn-upload btn-icon-prepend"></i>
                                Delete
                                </a>

                            </td>

                        </tr>
						@include('dashboard.customer.delete')
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection