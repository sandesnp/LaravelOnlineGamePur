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
                    </div>
                </div>
            </div>
        </div>

        <section class="monthly-picks-area section-padding-100">
    @if(count($game_type)>0)
    
        <div class="tab-content wow fadeInUp" data-wow-delay="500ms" id="myTabContent">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                <!-- Popular Games Slideshow -->

                 <!-- ##### Game Review Area Start ##### -->
    <section class="game-review-area section-padding-50">
            <div class="container">
                <div class="row">
                        @foreach($game_type as $game_types)
                    <div class="col-4"  >
                        
                        <!-- *** Single Review Area *** -->
                        <div class="hover08 column" style="height:450px; width:450px;">
                            <div class="game-thumbnail" style="height:400px;">
                                    
                                    <a href="/assignment/public/product/{{$game_types->id}}" ><figure><img src="/assignment/public/storage/Product_images/{{$game_types->product_image}}" style="width:100%;height:400px;" > </figure> </a>
                                <span>  <a href="/assignment/public/product/{{$game_types->id}}" style="color:white;" > {{$game_types->product_name}}</a></span>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    <div class="col-12">
                    {{$game_type->links()}}
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Game Review Area End ##### -->
            </div>
        </div>
        
        @else
        <h3> No Game Purchased Currently </h3>
        @endif
    </section>
@endsection