@extends('layouts.app')


@section('content')
@foreach($user as $users)
<div class="row justify-content-center">
<div class="col-md-8"> 
<div class="card">
<div class="card-header">{{ __('Change Password') }}</div>
<div class="card-body">
<!-- using hidden method to hide input so we can use IF Statement on update located on userController !-->
  {!! Form::open(['action'=>['usercontroller@update',$users->id], 'method'=>'POST']) !!}
    <div class="form-group row">             
      <label for="current-password" class="col-md-4 col-form-label text-md-right">Current Password</label>
      <div class="col-sm-8">
        <div class="form-group">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
          <input type="password" class="form-control" id="current-password" name="current_password" placeholder="Password">
        </div>
      </div>
      <input type="hidden" name="check" value="checking2">
      <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
      <div class="col-sm-8">
        <div class="form-group">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
      </div>

      <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Re-enter Password</label>
      <div class="col-sm-8">
        <div class="form-group">
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4 col-form-label text-md-right">
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
    </div>
    
    {!! form::hidden('_method','PUT') !!}
    {!! Form::close() !!}
</div>
</div>
</div>
</div>
@endforeach
@endsection