@extends('layouts.app')

@section('content')

    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
         
        </div>
    </div>


    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Post Slides -->
        <div class="hero-post-slides owl-carousel">

             <!-- Single Slide -->
             <div class="single-slide bg-img bg-overlay" style="background-image: url(img/core-img/bk-11.png);">
                <!-- Blog Content -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="400ms">Immsersive World</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Immerse youself in the world of RPG with its unprecedented events and witness the story from their view.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);">
                <!-- Blog Content -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="400ms">Online Co-op</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Play with friends and families around the world and complete mission and achieve rewards. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
                <!-- Blog Content -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="blog-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="400ms">Realistic Environment</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Get astounded with the breathtaking visuals and arts and make the most of your time indulging in their presence.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->
    <div style="background-image: linear-gradient(#66ffcc, rgba(3, 169, 244, 0.7));">
    <!-- ##### Games Area Start ##### -->
    <div class="games-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Games Area -->
                <div class="col-12 col-md-4">
                    <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="img/bg-img/game1.png" alt="">
                        <a href="/assignment/public/rpggame" class="btn egames-btn mt-30">View Games</a>
                    </div>
                </div>

                <!-- Single Games Area -->
                <div class="col-12 col-md-4">
                    <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="img/bg-img/game2.png" alt="">
                        <a href="/assignment/public/sportgame" class="btn egames-btn mt-30">View Games</a>
                    </div>
                </div>

                <!-- Single Games Area -->
                <div class="col-12 col-md-4">
                    <div class="single-games-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/bg-img/game3.png" alt="">
                        <a href="/assignment/public/onlinegame" class="btn egames-btn mt-30">View Games</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <section class="monthly-picks-area section-padding-100 bg-pattern">
        
            <div class="row">
                    <div class="col-12">
                        <!-- Title -->
                        <h2 class="section-title mb-70 wow fadeInUp" data-wow-delay="100ms">Check out some games</h2>
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
   


@endsection