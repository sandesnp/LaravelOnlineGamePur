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
<div class="card-body ">
        @include('inc.message')
        <div class="col-lg-6">
                <div class="card">
                        <div class="card-header">{{ __('Game Details') }}</div>
        
                        <div class="card-body">
                            {!! Form::Open(['action'=>['productcontroller@update',$product->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group">
                            {{Form::label('productname','Name of the Game')}} <small><b> (Leave Blank if Product Name is to remain unchanged.)</b></small>
                            {{Form::text('product_name',$product->product_name,['class'=>'form-control','palceholder'=>'Game Name here...'])}}
                            </div>
                            <div class="form-group">
                            {{form::label('productintro','Product Introduction')}}
                            {{form::textarea('product_intro',$product->product_intro,['class'=>'form-control','placeholder'=>'Game Introduction here...'])}}
                            </div>
                            <div class="form-group">
                            {{form::label('productprice','Price of the Product')}}
                            {{Form::text('product_price',$product->product_price,['class'=>'form-control','palceholder'=>'Game Price here...'])}}
                            <small> $0.00 </small>
                            </div>
                            <div class="form-group">
                            {{form::label('productdeveloper','Developers of the Product')}}
                            {{Form::text('product_developer',$product->product_developer,['class'=>'form-control','palceholder'=>'Game Developer names here...'])}}
                            </div>
                            <div class="form-group">
                            {{form::label('productimage','Image for the Product:&nbsp;')}}
                            {{Form::file('product_image')}}
                            </div>
                            <div class="form-group">
                            {{form::label('producttype','Type of Game:&nbsp;')}}
                            {{Form::select('product_type', array('RPG'=>'Role Playing Game', 'Sport' => 'Sport Game', 'Online'=>'Online Game'), ['class' => 'form-control', 'multiple' => 'multiple'])}}
                            </div>
        
                            {{form::submit('Submit',['class'=>'btn btn-primary'])}}
        
                            {!! form::hidden('_method','PUT') !!}
                         {!! form::close() !!}
                            
                            <br/>
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