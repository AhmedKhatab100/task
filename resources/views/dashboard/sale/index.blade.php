@extends('layouts.dashboard.app')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sales Table</h4>
                  <hr>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Date Of Added</th>
                            <th>Name Of Customer</th>
                            <th>Quantity Of Sale</th>
                            <th>Description</th>
                            <th>Unit Price</th>
                            <th>Subtotal</th>
                            <th>Discount</th>
                            <th>Grand Total Code</th>
                            <th>Notes</th>
                            <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                      @foreach($sales as $sale)

                        <tr>
                            <td>{{$sale->id}}</td>
                            <td>{{$sale->created_at}}</td>
                            <td>{{$sale->customer_id->name}}</td>
                            <td>{{$sale->quantity}}</td>
                            <td>{{$sale->description}}</td>
                            <td>{{$sale->unit_price}}</td>
                            <td>{{$sale->subtotal}}</td>
                            <td>{{$sale->discount}}</td>
                            <td>{{$sale->grand_total}}</td>
                            <td>{{$sale->notes}}</td>
                            <td>
                                <a  class="btn btn-primary btn-icon-text" href="{{route('sales.edit',$sale->id)}}">
                                <i class="typcn typcn-document btn-icon-append"></i>
                                Edit 
                                </a>
                                <a  class="btn btn-danger btn-icon-text" data-toggle="modal" href="#delete{{$sale->id}}">
                                <i class="typcn typcn-upload btn-icon-prepend"></i>
                                Delete
                                </a>

                            </td>

                        </tr>
						@include('dashboard.sale.delete')
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection