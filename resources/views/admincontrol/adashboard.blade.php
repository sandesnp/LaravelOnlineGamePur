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
                                    <h4 class="card-title">Total Table Rows</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="row">


                                    <div class="card border-success mb-3" style="max-width: 20rem;">
                                        <div class="card-header">User Total Rows</div>
                                        <hr>
                                        <div class="card-body">
                                          <h4 class="card-title">{{$countuser}}</h4>
                                         
                                        </div>
                                    </div>

                                    &nbsp;            &nbsp; &nbsp; &nbsp;    &nbsp;

                                    <div class="card border-success mb-3" style="max-width: 20rem;">
                                        <div class="card-header">Product Total Rows</div>
                                        <hr>
                                        <div class="card-body">
                                          <h4 class="card-title">{{$countproduct}}</h4>
                                          
                                        </div>
                                    </div>

                                    &nbsp;            &nbsp; &nbsp; &nbsp;    &nbsp;

                                    <div class="card border-success mb-3" style="max-width: 20rem;">
                                        <div class="card-header">Requirement Total rows</div>
                                        <hr>
                                        <div class="card-body">
                                          <h4 class="card-title">{{$countreq}}</h4>
                                          
                                        </div>
                                    </div>

                                    &nbsp;            &nbsp; &nbsp; &nbsp;    &nbsp;

                                    <div class="card border-success mb-3" style="max-width: 20rem;">
                                        <div class="card-header">Wallet Total Rows</div>
                                        <hr>
                                        <div class="card-body">
                                          <h4 class="card-title">{{$countwallet}}</h4>
                                         
                                        </div>
                                    </div>

                                    &nbsp;            &nbsp; &nbsp; &nbsp;    &nbsp;

                                    <div class="card border-success mb-3" style="max-width: 20rem;">
                                        <div class="card-header">Total Review</div>
                                        <hr>
                                        <div class="card-body">
                                          <h4 class="card-title">{{$countreview}}</h4>
                                          
                                        </div>
                                    </div>


                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>           
        </div>
    </div>

@endsection