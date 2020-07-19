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
                                    <h4 class="card-title">Review Edit and Delete</h4>
                                </div>
                                <div class="card-body ">
                                    
                                        @include('inc.message')                                        
                                        <table class="table table-hover">
                                            <thead>
                                              <tr class="table-active">
                                                <th scope="col">Email</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Review</th>                                               
                                                <th scope="col">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($allreview)>0)
                                            @foreach($allreview as $allreviews)
                                            {{-- LOOP BELOW --}}
                                              <tr class="table-success">
                                                <th scope="row">{{$allreviews->email}}</th>
                                                <th scope="row">{{$allreviews->product_name}}</th>
                                                <td>{{$allreviews->reviewcontent}}</td>
                                                <td> <a href="/assignment/public/pur/{{$allreviews->id}}/edit" class="btn btn-secondary">Edit</a>
                                                    {!! Form::open(['action' => ['purchasecontroller@update',$allreviews->id], 'method' => 'POST']) !!}
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="hidden" name="reviewadmindel" value="reviewadmindel">
                                                       <input type="submit" class="btn btn-danger" name="delete" value="Delete">
                                                       {!! form::hidden('_method','PUT') !!}
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
                                          {{$allreview->links()}}
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>           
        </div>
    </div>

@endsection