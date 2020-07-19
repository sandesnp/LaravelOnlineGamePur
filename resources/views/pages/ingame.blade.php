@extends('layouts.app')


@section('content')
<!-- ##### Monthly Picks Area Start ##### -->
<section class="monthly-picks-area bg-pattern">

   
    
    <div class="tab-content wow fadeInUp" data-wow-delay="500ms" id="myTabContent">
     <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
         
    <!-- ##### Game Review Area Start ##### -->
<section class="game-review-area section-padding-50">

   <div class="row">
       <div class="col-9" style="border-style: solid; height:440px;" > <!--class="col-lg-4 offset-lg-1"!-->
           <br/>
           
          
           <!-- *** Single Review Area *** -->
           <div class="single-game-review-area d-flex flex-wrap mb-30" style="">
               <div class="game-thumbnail">
                   <img src="/assignment/public/storage/Product_images/{{$products->product_image}}" style="width:450px;height:400px;">
               </div>
               <div class="game-content">
                   <span class="text-white"> &nbsp; {{$products->product_type}} &nbsp; </span>
                   <p style="font-size:200%; color:white; font-weight:bold;">{{$products->product_name}}</p>
                   
                   <hr style="border: 1px solid #87cefa;">
                   <h5><p class="text-white">{{$products->product_intro}}</p></h5>
                   <h5><a class="bg-white">{{$products->product_developer}}</a></h5>
                   
                   
           </div>
           </div>
           
         
       </div>
      
       <div class="col-3" style="border-style: solid;">
        <br />
        <br />
        <div class="col-lg-12">
            <small style="font-size:100%; color:white"> Price </small>
         <p style="font-size:280%; color:white; font-weight:bold;"> ${{$products->product_price}}  </p>
        </div>
                <div class="rating-area text-center">
                    <h3 style=" color:white"> Rating: @if ( strpos( $avgrate, "." ) !== false )  
                        {{number_format($avgrate, 1, ".", "")}}
                        @else
                        {{$avgrate}}
                    @endif
                    </h3>
                   
                    <div class="stars">
                            <?php
                            for($i=1;$i<=$avgrate;$i++)
                            { ?>
                            <i class="fa fa-star" aria-hidden="true" style="color:red;"></i>
                            <?php
                            }
                            if ( strpos( $avgrate, "." ) !== false )
                            {
                             ?>
                             <i class="fa fa-star-half-o" aria-hidden="true" style="color:red;"></i>
                            <?php
                            }
                            ?>
                    </div>
                </div>
                {!! Form::open(['action'=>['productcontroller@checkout'], 'method'=>'POST']) !!}
                <div class="form-group">
                        <input type="hidden" name="product_name" value="{{$products->product_name}}">
                        <input type="hidden" name="product_image" value="{{$products->product_image}}">
                        <input type="hidden" name="id" value="{{$products->id}}">
                        <input type="hidden" name="product_price" value="{{$products->product_price}}">
                        <div class="col-md-8 col-form-label text-md-right">
                        @if(!empty($review))
                        <a href="/assignment/public/storage/Product_images/{{$products->product_image}}" class="btn egames-btn mt-30" download>Download</a>
                        
                        @else
                        <button type="submit" class="btn egames-btn mt-30">  Purchase</button>
                        @endif 
                        </div>
                </div>
                {!!form::close()!!}        
            </div>

   </div>
  
</section>
<!-- ##### Game Review Area End ##### -->
</div>
</div>


    
</section>

<br/>
<br/>

        
<section class="monthly-picks-area bg-pattern">
        <div class="tab-content wow fadeInUp" data-wow-delay="500ms" >
         <div class="tab-pane fade show active" id="popular" role="tabpanel" >

                <div class="wrap-collabsible">
                        <input id="collapsible" class="toggle" type="checkbox">
                        <label for="collapsible" class="lbl-toggle">Requirement</label>
                        <div class="collapsible-content">
                          <div class="content-inner">
                              
                    @foreach($requirement as $requirements)
                                <div class="content">        
                                    <p  style="font-size:20px;"> Operating System: {{$requirements->os}} </P>
                                    <p  style="font-size:20px;"> RAM: <?php if($requirements->ram!=0){ echo $requirements->ram;} else {echo 'TBD';} ?> </P>
                                    <p  style="font-size:20px;"> Processor: {{$requirements->processor}} </P>
                                    <p  style="font-size:20px;"> Graphic Card: {{$requirements->graphics}} </P>
                                    <p  style="font-size:20px;"> Network Requirement: <?php if($requirements->network!=0){ echo 'Yes';} else {echo 'No';} ?> </P>
                                </div>
                               @endforeach
                          </div>
                        </div>
                      </div>
        </div>
    </div>
</section>
<section class="monthly-picks-area section-padding-100 bg-pattern">
        
        <div class="row">
                <div class="col-12">
                    <!-- Title -->
                    <h2 class="section-title mb-70 wow fadeInUp" data-wow-delay="100ms">You may also like</h2>
                </div>
            </div>
        <div class="tab-content wow fadeInUp" data-wow-delay="500ms">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" >
                <!-- Popular Games Slideshow -->
                <div class="popular-games-slideshow owl-carousel">
                        @if(count($game_type)>0)

                        @foreach($game_type as $game_types)
                    <!-- Single Games -->
                    <div class="single-games-slide">
                        <a href="/assignment/public/product/{{$game_types->id}}"><img src="/assignment/public/storage/Product_images/{{$game_types->product_image}}" alt="" style="width:320px; height:280px;"></a>
                        <div class="slide-text">
                        <a href="/assignment/public/product/{{$game_types->id}}" class="game-title">{{$game_types->product_name}}</a>
                            <div class="meta-data">
                                <a href="#">User: 9.1/10</a>
                                <a href="#">{{$game_types->product_type}}</a>
                            </div>
                        </div>
                    </div>

                   @endforeach

                   @else
                   No Game To Recommend
                   @endif

                </div>
            </div>
        </div>
    </section>
<br/>

    <section class="monthly-picks-area bg-pattern">
        <div class="tab-content wow fadeInUp" data-wow-delay="500ms" >
         <div class="tab-pane fade show active" id="popular" role="tabpanel" >
         
            <div class="row">
            <div class="col-7" style="padding-bottom: 20px;"> <!-- style="border: 1px solid #87cefa;">  !-->
           <?php  
           if(!empty($review)) {           /*seleect * from purchase table with user and product id. IF it has any data = bought */              
                if(empty($review->pivot->reviewcontent)) {  /*Doesn't have a review for the product*/
                    ?>   
                    <hr style="border: 4px solid #87cefa;">
                    <h2 style="font-weight: bold; color:white;"> My review </h2>
                    <hr style="border: 1px solid #87cefa;">
                    {!! Form::open(['action'=>['purchasecontroller@update',$products->id], 'method'=>'POST']) !!}
                
                    <br/>
                    {{form::textarea('review_content','',['class'=>'form-control','placeholder'=>'Write review here...','style'=>'background: inherit; color:white;','rows'=>'8','cols'=>'100','max'=>'1','min'=>'0'])}}
                    {{form::submit('Done',['class'=>'btn egames-btn w-100'])}}
                
                
                {!! form::hidden('_method','PUT') !!}
                {!! Form::close() !!}
               
            <?php }
                else {   /*  Already has a review*/
                ?>
                <hr style="border: 4px solid #87cefa;">
                <h2 style="font-weight: bold; color:white;"> My review </h2>
                <hr style="border: 1px solid #87cefa;">
                
                
                
                {!! Form::open(['action' => ['purchasecontroller@update',$review->id], 'method' => 'POST']) !!}
                
                {{form::textarea('review_content',$review->pivot->reviewcontent,['class'=>'form-control','placeholder'=>'Write review here...','style'=>'background: inherit; color:white;','rows'=>'5','cols'=>'100'])}}
                <br/>
                <input type="submit" class="btn btn-primary" name="update" value="Update" />
                <input type="submit" class="btn btn-danger" name="delete" value="Delete" style="float:right;" />
                {!! form::hidden('_method','PUT') !!}
                {!!Form::close()!!}
                <?php 
            }
            ?>
        </div>
            <div class="col-5"  style="padding-top:35px;">
                    <br>
                     <input type="text" class="kv-fa rating-loading" data-size="xl" name="uid" id="un" onkeyup="checkUN()" /> 
                     <small id="show" style="color:white;"></small>
                    <br>
            
            <?php 
        }
        ?>
        <div class="col-xs-1 text-center" style="width: 100%;">
           <h4 style="color:white;"> Game Rating</h4>
           <?php
           for($i=1;$i<=$avgrate;$i++)
           { ?>
           <i class="fa fa-star fa-5x" aria-hidden="true" style="color:cyan;"></i>
           <?php
           }
           if ( strpos( $avgrate, "." ) !== false )
           {
            ?>
            <i class="fa fa-star-half-o fa-5x" aria-hidden="true"  style="color:cyan;"></i>
           <?php
           }
           ?>
                  
           </div>
        </div>
        </div>
         
    {{-- Recent Review Divison --}}
    <div class="col-12">

            <hr style="border: 4px solid #87cefa;">
            <h2 style="font-weight: bold; color:white;"> Recent Reviews </h2>
            <hr style="border: 1px solid #87cefa;">

            @if(count($allreview)>0)
            @foreach($allreview as $allreviews)
            <div class="alert alert-warning">
								
                    <span class="badge badge-secondary">
                            {{$allreviews->firstname}}
                    </span>
                    <span class="badge badge-secondary">
                        {{$allreviews->created_at}}
                </span>


                    <?php
                    for($i=1;$i<=$allreviews->pivot->rating;$i++)
                    { ?>
                    <i class="fa fa-star" aria-hidden="true" style="color:red; float:right;"></i>
                    <?php
                    }
                    
                     ?>
                   
            



                    <hr style="border: 2px solid black;">
                    
                    <p class="text-dark">   {{$allreviews->pivot->reviewcontent}} </p>
                   
                    <hr style="border: 2px solid black;">
            </div>
            @endforeach
                @else
                <h2> No current Review for this product</h2>
                @endif

    </div>
        {{-- ##END Recent Review Divison  --}}
        </div>
        </div>
    </section>
<script>
    $(document).on('ready', function () {
               
                
        $('.kv-fa').rating({
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-star"></i>',
            emptyStar: '<i class="fa fa-star-o"></i>'
        });
      
       

        $('.rating,.kv-gly-star,.kv-gly-heart,.kv-uni-star,.kv-uni-rook,.kv-fa,.kv-fa-heart,.kv-svg,.kv-svg-heart').on(
                'change', function () {
                  var un = document.getElementById("un").value;
                  var req = new XMLHttpRequest;
                  var cc= "<?php echo $products->id ?>";

                  req.onreadystatechange=function(){
                  if(req.readyState==4 && req.status==200)
                  {
                  document.getElementById("show").innerHTML =
                                  req.responseText;
                  }
                  }
                  req.open("GET","/assignment/public/pur/rating/"+ cc +"/"+ $(this).val(),true);
                  req.send();
                });
    });
    </script>
@endsection

