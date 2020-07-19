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
                                    <h4 class="card-title">Users Edit and Delete</h4>
                                </div>
                                <div class="card-body ">
                                        @include('inc.message')
                                        <small> <b>CATION: Data will be deleted on purchase and wallet table on Delete. </b></small>
                                        <table class="table table-hover">
                                            <thead>
                                              <tr class="table-active">
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($alluser)>0)
                                            @foreach($alluser as $allusers)
                                            {{-- LOOP BELOW --}}
                                              <tr class="table-success">
                                                <td>{{$allusers->firstname}}</td>
                                                <td>{{$allusers->lastname}}</td>
                                                <td>{{$allusers->phoneno}}</td>
                                                <td>{{$allusers->address}}</td>
                                              <td> <a href="/assignment/public/user/{{$allusers->id}}/edit" class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('user.destroy', $allusers->id) }}" method="POST">
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
                                          {{$alluser->links()}}

                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>           
        </div>
    </div>

@endsection