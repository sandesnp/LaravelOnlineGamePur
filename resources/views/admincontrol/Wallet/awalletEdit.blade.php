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
                                    <h4 class="card-title">Enter Update Data</h4>
                                </div>
                                <div class="card-body p-5">
                                    
                                        {!! Form::open(['action'=>['walletcontroller@update',$wallet->id],'method'=>'POST']) !!}


                                        <div class="form-group">
                                        <label for="full_name">Full name:<b> {{$wallet->firstname}} {{$wallet->lastname}}</b></label>
                                        
                                        </div> <!-- form-group.// -->
                                        
                                        <input type="hidden" name="walletadmin" value="walletadmin1">
                                        
                                        <hr>
                                        <div class="form-group">
                                                <label for="username">Update Wallet</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                    </div>
                                                    {{Form::text('wallet_amount',$wallet->walletsum,['class'=>'form-control','palceholder'=>'Processor here...'])}}
                                                   
                                                </div> <!-- input-group.// -->
                                        </div> <!-- form-group.// -->
                                        
                                        
                                        <button class="subscribe btn btn-primary btn-block"> Confirm  </button>
                                        {!! form::hidden('_method','PUT') !!}
                                        {!! Form::close() !!}
                                        
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>           
        </div>
    </div>

@endsection