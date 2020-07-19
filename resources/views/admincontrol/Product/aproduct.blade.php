@extends('layouts.appadmin')

@section('content')
    <div class="wrapper">
        @include('inc.anavbar')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">        
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Product Edit and Delete</h4>
                                    <a href="/assignment/public/product/create" class="btn btn-outline-primary" style="float:right;">Add Product</a>
                                </div>
                                <div class="card-body ">
                                        @include('inc.message')
                                        <small> <b>CATION: Data will be deleted on purchase and Requirement table on Delete. </b></small>
                                        <table class="table table-hover">
                                            <thead>
                                              <tr class="table-active">
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Product Intro</th>
                                                <th scope="col">Product Price</th>
                                                <th scope="col">Product Developer</th>
                                                <th scope="col">Product Type</th>
                                                <th scope="col">Product Image</th>
                                                <th scope="col">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($allproduct)>0)
                                            @foreach($allproduct as $allproducts)
                                            {{-- LOOP BELOW --}}
                                              <tr class="table-success">
                                                <td>{{$allproducts->product_name}}</td>
                                                <td>{{$allproducts->product_intro}}</td>
                                                <td>{{$allproducts->product_price}}</td>
                                                <td>{{$allproducts->product_developer}}</td>
                                                <td>{{$allproducts->product_type}}</td>
                                                <td>{{$allproducts->product_image}}</td>
                                              <td> <a href="/assignment/public/product/{{$allproducts->id}}/edit" class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('product.destroy', $allproducts->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger">Delete</button>
                                                </form> </td>
                                              </tr>

                                              @endforeach
                                              
                                              @else
                                              <tr class="table-success">
                                                <th scope="row">No data</th>
                                                <td>No data</td>
                                                <td>No data</td>
                                                <td>No data</td>
                                              </tr>
                                              @endif
                                            </tbody>
                                           
                                          </table> 
                                          {{$allproduct->links()}}

                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>           
        </div>
    </div>

@endsection