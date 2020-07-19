@extends('layouts.appadmin')

@section('content')
    <div class="wrapper">
        @include('inc.anavbar')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">        
                        <div class="col-md-12">
                                
                                    
                                    
                                        <div class="card border-success mb-3" style="max-width: 100%;">
                                                <div class="card-header" style="font-size:30px;">CRUD/ Bread Operation on Data</div>
                                                <hr>
                                                <div class="card-body" >
                                                  <h4 class="card-title"></h4>
                                                    <p style="color: black; font-size:20px">
                                                            ◉ Each link in the navigation bar represents the entity used for this application. <br><br>
                                                            ◉ To perform CRUD operation on any data, navigate to link on the navigation bar. <br><br>
                                                            ◉ Not all entity have full crud function. Some are limited to just Edit. This is specified for each entity in thier respective pages. <br><br>
                                                            ◉ To edit a certain row of an entity click on Edit of that row under Action column. <br><br>
                                                            ◉ Under the new Edit page, change the data and click Save. The data this has been edited. <br><br>
                                                            ◉ To delete a certain row of an entity click on Delete of that row under Action Column. The Row will be deleted.
                                                    </p>
                                                </div>
                                            </div>


                                
                            
                        </div>
                    </div>
                    
                </div>
            </div>           
        </div>
    </div>

@endsection