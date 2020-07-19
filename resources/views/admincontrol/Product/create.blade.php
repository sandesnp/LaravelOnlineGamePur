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
<h4 class="card-title">Product Create</h4>
</div>
<div class="card-body ">
@include('inc.message')

<div class="row">
        <div class="col-lg-6">
                <div class="card">
                        <div class="card-header">{{ __('Game Details') }}</div>
        
                        <div class="card-body">
                                {!! Form::Open(['action'=>'productcontroller@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                <div class="form-group">
                                {{Form::label('productname','Name of the Game')}}
                                {{Form::text('product_name','',['class'=>'form-control','palceholder'=>'Game Name here...'])}}
                                </div>
                                <div class="form-group">
                                {{form::label('productintro','Product Introduction')}}
                                {{form::textarea('product_intro','',['class'=>'form-control','placeholder'=>'Game Introduction here...'])}}
                                </div>
                                <div class="form-group">
                                {{form::label('productprice','Price of the Product')}}
                                {{Form::text('product_price','',['class'=>'form-control','palceholder'=>'Game Price here...'])}}
                                <small> $0.00 </small>
                                </div>
                                <div class="form-group">
                                {{form::label('productdeveloper','Developers of the Product')}}
                                {{Form::text('product_developer','',['class'=>'form-control','palceholder'=>'Game Developer names here...'])}}
                                </div>
                                <div class="form-group">
                                {{form::label('productimage','Image for the Product:&nbsp;')}}
                                {{Form::file('product_image')}}
                                </div>
                                <div class="form-group">
                                {{form::label('producttype','Type of Game:&nbsp;')}}
                                {{Form::select('product_type', array('RPG'=>'Role Playing Game', 'Sport' => 'Sport Game', 'Online'=>'Online Game'), ['class' => 'form-control', 'multiple' => 'multiple'])}}
                                </div>
        
                                
                                <br/>
                        </div>
                        </div>
        </div>
        
        <div class="col-lg-6 offset-lg-0">
                <div class="card">
                        <div class="card-header">{{ __('Game Requirement') }}</div>
                        <div class="card-body">
                        <small> Optional, can be left empty and filled/updated later. </small>
                        <br/>
                        <br/>
                                <div class="form-group">
                                        {{Form::label('os','Operating System')}}
                                        {{Form::text('os','',['class'=>'form-control','palceholder'=>'Operating System here...'])}}
                                </div>
        
                                <div class="form-group">
                                        {{Form::label('ram','RAM')}}
                                        {{Form::text('ram','',['class'=>'form-control','palceholder'=>'RAM here...'])}}
                                </div>
        
                                <div class="form-group">
                                        {{Form::label('processor','Processor')}}
                                        {{Form::text('processor','',['class'=>'form-control','palceholder'=>'Processor here...'])}}
                                </div>
        
                                <div class="form-group">
                                        {{Form::label('graphics','Graphics Card')}}
                                        {{Form::text('graphics','',['class'=>'form-control','palceholder'=>'Graphics here...'])}}
                                </div>
        
                                <div class="form-group">
                                        {{form::label('network','Does it need network?&nbsp;')}}
                                        {{Form::select('network', array('1'=>'It support online connectivity.', '0' => 'It doesnt support online connectivity.'), ['class' => 'form-control', 'multiple' => 'multiple'])}}
                                        </div>
        
                        
                        </div>
                </div>
        <br/>
        <br/>
        <br/>
                {{form::submit('Submit',['class'=>'btn egames-btn w-100'])}}
        
                {!! form::close() !!}
        
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