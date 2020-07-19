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
                    <h4 class="card-title">Users Behavior</h4>
                </div>
                
                        @empty($user)
                        <h4> Please do not take a shortcut </h4>
                        @else
        
        
            
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{ __('Change Profile Data') }}</div>
                    
                                    <div class="card-body">
                                            {!! Form::open(['action'=>['usercontroller@update',$user->id], 'method'=>'POST']) !!}
                                            
                                            @csrf
                    
                                            <div class="form-group row">
                                                <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $user->firstname }}" required autocomplete="firstname" autofocus>
                    
                                                    @error('firstname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                    <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname" autofocus>
                        
                                                        @error('lastname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <input type="hidden" name="check" value="checking1">
                                                <input type="hidden" name="checkadmin" value="checking1admin">
                                                <div class="form-group row">
                                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}" required autocomplete="address" autofocus>
                            
                                                            @error('address')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                    
                                                    <div class="form-group row">
                                                            <label for="phoneno" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                                
                                                            <div class="col-md-6">
                                                                <input id="phoneno" type="text" class="form-control @error('phoneno') is-invalid @enderror" name="phoneno" value="{{ $user->phoneno }}" required autocomplete="phoneno" autofocus>
                                
                                                                @error('phoneno')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Update') }}
                                                    </button>
                                                </div>
                                            </div>
                                            {!! form::hidden('_method','PUT') !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endempty 
                    
                
            </div>
        </div>
    </div>
            
    </div>
</div>           
</div>
</div>

@endsection