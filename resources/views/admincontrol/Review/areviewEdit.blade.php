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
<div class="card-body ">
        @include('inc.message')
        <div class="col-lg-6">
                <div class="card">
                        <div class="card-header">{{ __('Game Details') }}</div>
        
                        <div class="card-body">
                            {!! Form::open(['action' => ['purchasecontroller@update',$review->id], 'method' => 'POST']) !!}
                            <div class="form-group">
                            <h5> Email : <b>{{$review->email}} </b></h5>
                            </div>
        
                            <div class="form-group">
                                    <h5> Product Name : <b>{{$review->product_name}} </b></h5>
                           
                            </div>
        
                           <input type="hidden" name="reviewadmin" value="reviewadmin1">
        
                            <div class="form-group">
                            {{Form::label('review','Review')}}
                            {{form::textarea('review_content',$review->reviewcontent,['class'=>'form-control','placeholder'=>'Write review here...','rows'=>'10','cols'=>'100'])}}
                            </div>
        
                            <input type="submit" class="btn btn-primary" name="update" value="Update" />
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