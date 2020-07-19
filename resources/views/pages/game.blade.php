@extends('layouts.app')


@section('content')
<!-- ##### Monthly Picks Area Start ##### -->


        <div class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/27.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breadcrumb Text -->
                    <div class="col-12">
                        <div class="breadcrumb-text">
                            <h2>{{$game}}</h2>
                        </div>
                        <div >
                            {!! Form::open(['action'=>'productcontroller@getSearch','method'=>'Post']) !!}
                            {{Form::token()}}
                                <input type="input" name="search" class="form-control" style="width:40%; float: left;" id="un" oninput="checkUn()" list="productName" placeholder="Search" required>
                                <button type="submit" id="submit" class="btn"><i class="fa fa-search"></i></button>
                                <small id="show"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="monthly-picks-area bg-pattern">
    @if(count($game_type)>0)
    
        <div class="tab-content wow fadeInUp" data-wow-delay="500ms" id="myTabContent">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                <!-- Popular Games Slideshow -->

                 <!-- ##### Game Review Area Start ##### -->
    <section class="game-review-area section-padding-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        
                        
                        @foreach($game_type as $game_types)
                        <!-- *** Single Review Area *** -->
                        <div class="single-game-review-area d-flex flex-wrap mb-30">
                            <div class="game-thumbnail">
                                <img src="/assignment/public/storage/Product_images/{{$game_types->product_image}}" style="width:450px;height:400px;">
                            </div>
                            <div class="game-content">
                                <span class="text-white"> &nbsp; {{$game_types->product_type}} &nbsp; </span>
                            <a href="/assignment/public/product/{{$game_types->id}}" class="game-title" style="color:white;" >{{$game_types->product_name}}</a>
                                <div class="game-meta">
                                    
                                    <h5 class="text-white">${{$game_types->product_price}}</h5>
                                </div>
                                <hr style="border: 1px solid #87cefa;">
                                <h5><p class="text-white">{{$game_types->product_intro}}</p></h5>
                                
                                <!-- Download & Rating Area -->
                                <div class="footer-area">
                                <div class="download-rating-area d-flex align-items-center justify-content-between">
                                    <div class="download-area">
                                        <a href="#"><img src="img/core-img/app-store.png" alt=""></a>
                                        <a href="#"><img src="img/core-img/google-play.png" alt=""></a>
                                    </div>
                                    <div class="rating-area text-center">
                                        <h3>with Ratings</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <hr style="border: 1px solid #87cefa;">
                        @endforeach
                        {{$game_type->appends(Request::except('page'))->links()}}
                        {{-- {{$game_type->links()}} --}}



                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Game Review Area End ##### -->
            </div>
        </div>
        
        @else
        <h3 style="color:white;"> No Products Found </h3>
        @endif
    </section> 
    
    
    <script>
            function checkUn()
            {
            var un = document.getElementById("un").value;
            var req = new XMLHttpRequest;
            
            req.onreadystatechange=function(){
            if(req.readyState==4 && req.status==200)
            {
            document.getElementById("show").innerHTML =
                                            req.responseText;
                                            
    
            }
            }
            req.open("GET","/assignment/public/proser/"+un,true);
            req.send();
            }
            </script>
@endsection