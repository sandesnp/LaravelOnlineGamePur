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
                                    <h4 class="card-title">Requirement Edit</h4>
                                </div>
                                <div class="card-body ">
                                        @include('inc.message')                                        
                                        <table class="table table-hover">
                                            <thead>
                                              <tr class="table-active">
                                                <th scope="col">Product Name</th>
                                                <th scope="col">OS</th>
                                                <th scope="col">RAM</th>
                                                <th scope="col">Processor</th>
                                                <th scope="col">Graphics</th>
                                                <th scope="col">Networl</th>                                                
                                                <th scope="col">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($allrequirement)>0)
                                            @foreach($allrequirement as $allrequirements)
                                            {{-- LOOP BELOW --}}
                                              <tr class="table-success">
                                                    <th scope="row">{{$allrequirements->product_name}}</th>
                                                <td>{{$allrequirements->os}}</td>
                                                <td>{{$allrequirements->ram}}</td>
                                                <td>{{$allrequirements->processor}}</td>
                                                <td>{{$allrequirements->graphics}}</td>
                                                <td> @if($allrequirements->network==0)
                                                     No Connectivity
                                                    @else
                                                     Connection Supported 
                                                    @endif</td>
                                              <td> <a href="/assignment/public/req/{{$allrequirements->id}}/edit" class="btn btn-secondary">Edit</a></td>
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
                                          {{$allrequirement->links()}}
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>           
        </div>
    </div>

@endsection