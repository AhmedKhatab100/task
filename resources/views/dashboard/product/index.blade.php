@extends('layouts.dashboard.app')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Products Table</h4>
                  <hr>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Detalis Person</th>
                            <th>Price Address</th>
                            <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                      @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->details}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <a  class="btn btn-primary btn-icon-text" href="{{route('products.edit',$product->id)}}">
                                <i class="typcn typcn-document btn-icon-append"></i>
                                Edit 
                                </a>
                                <a  class="btn btn-danger btn-icon-text" data-toggle="modal" href="#delete{{$product->id}}">
                                <i class="typcn typcn-upload btn-icon-prepend"></i>
                                Delete
                                </a>

                            </td>

                        </tr>
						@include('dashboard.product.delete')
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection