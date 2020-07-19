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
                            {!! Form::Open(['action'=>['requirementcontroller@update',$requirement->id],'method'=>'POST']) !!}
                            <div class="form-group">
                            {{Form::label('os','Operating System')}}
                            {{Form::text('os',$requirement->os,['class'=>'form-control','palceholder'=>'Operating System here...'])}}
                            </div>
        
                            <div class="form-group">
                            {{Form::label('ram','RAM')}}
                            {{Form::text('ram',$requirement->ram,['class'=>'form-control','palceholder'=>'RAM here...'])}}
                            </div>
        
                            <div class="form-group">
                            {{Form::label('processor','Processor')}}
                            {{Form::text('processor',$requirement->processor,['class'=>'form-control','palceholder'=>'Processor here...'])}}
                            </div>
        
                            <div class="form-group">
                            {{Form::label('graphics','Graphics Card')}}
                            {{Form::text('graphics',$requirement->graphics,['class'=>'form-control','palceholder'=>'Graphics here...'])}}
                            </div>
        
                            <div class="form-group">
                            {{form::label('network','Does it need network?&nbsp;')}}
                            {{Form::select('network', array('1'=>'It support online connectivity.', '0' => 'It doesnt support online connectivity.'), ['class' => 'form-control', 'multiple' => 'multiple'])}}
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