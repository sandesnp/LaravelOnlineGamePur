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
                                    <h4 class="card-title">Wallet Edit</h4>
                                </div>
                                <div class="card-body ">
                                        @include('inc.message')
                                        <table class="table table-hover">
                                            <thead>
                                              <tr class="table-active">
                                                <th scope="col">Email</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Wallet Sum</th>                                                
                                                <th scope="col">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($allwallet)>0)
                                            @foreach($allwallet as $allwallets)
                                            {{-- LOOP BELOW --}}
                                              <tr class="table-success">
                                              <th scope="row"> {{$allwallets->email}}</th>
                                                <td>{{$allwallets->firstname}} {{$allwallets->lastname}}</td>
                                                <td>{{$allwallets->walletsum}}</td>
                                              <td> <a href="/assignment/public/wallet/{{$allwallets->id}}/edit" class="btn btn-secondary">Edit</a></td>
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
                                          {{$allwallet->links()}}
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>           
        </div>
    </div>

@endsection