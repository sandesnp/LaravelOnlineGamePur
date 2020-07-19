@extends('layouts.app')


@section('content')
<div class="text-center wow fadeInUp" data-wow-delay="100ms">
<!-- ##### Featured Articles Area Start ##### -->
<section class="featured-articles-area bg-img bg-pattern" style="background-image: url(img/core-img/pattern-question.jpg);">
    {{-- RPG --}}
        <!-- ##### Breadcrumb Area Start ##### -->
 <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/core-img/bk-10.png);">
    <div class="container h-100" id="top">
        <div class="row h-100 align-items-center">
            <!-- Breadcrumb Text -->
            <div class="col-12">
                <div class="breadcrumb-text"  id="faq1">
                    <h2>HELP</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top:40px">
        <div class="article-content mb-100"> <a href="#" class="post-title" style="text-align: center;"> Frequently Asked Questions</a> </div>
        <div class="row" >
            
            <!-- Article Content -->
            <div class="col-12 col-lg-6">
                <div class="article-content mb-100">
                    <a href="#" class="bg-light"  > How do I Login & Register?</a>
                    <p class="bg-light" style="font-size:15px; color:black;"> 
                        ➔ Navigate to top right corner of the screen <br>
                        ➔ Provide your information. Make sure to provide email and password you can remember and then click on Register <br> 
                        ➔ User logged in automatically when he has registered. <br>
                        ➔ To login if User is logged out, navigate to top right corner of the screen <br>
                        ➔ Click on Login and then provide your Email and Password <br>
                        ➔ And now you have successfully registered and logged in
                    </p>
                </div>
            </div>
            <!-- Article Thumbnail -->
            <div class="col-12 col-lg-6" >
                    <div class="article-thumbnail mb-100" id="faq2">
                        <img src="img/core-img/gif-1.gif" alt="login and register gif">
                    </div>
                </div>
             


                {{-- -------------------------------------------------------------------------------- --}}

               <!-- Article Content -->
            <div class="col-12 col-lg-12" >
                <div class="article-content mb-100" style="text-align: center;">
                    <a href="#" class="bg-light" > How do I Purchase a game?</a>
                    <p class="bg-light" style="font-size:15px; color:black;"> 
                        ➔ After Logging in navigate to wallet on navigation bar<br>
                        ➔ Provide your Bank credentials and then the amount you would like TO withdraw. Click Confirm <br> 
                        ➔ On the top right corner the wallet will be updated. You can follow the above process to update your current wallet <br>
                        ➔ To purchase a Game first navigate to Game on the navigation bar  <br>
                        ➔ Click on the game you would like to purchase and in the page of that game. Check the requirements and if you fullfill the requirement click on purchase.   <br>
                        ➔ When you click on purchase you will be routed to checkout page. Click checkout and the game is now yours. <br>
                        ➔ You can view your games in Library.
                    </p>
                </div>

                <div class="col-12 col-lg-12">
                        <div class="article-thumbnail mb-100" >
                            <img src="img/core-img/gif-2.gif" alt="purchase game gif" id="faq3">
                        </div >
                    </div>

            </div>


  {{-- -------------------------------------------------------------------------------- --}}
  <!-- Article Thumbnail -->
        <div class="col-12 col-lg-6">
                <div class="article-thumbnail mb-100"  >
                    <img src="img/core-img/gif-3.gif" alt="review and rate gif">
                </div>
            </div>
            <!-- Article Content -->
            <div class="col-12 col-lg-6">
                    <div class="article-content mb-100">
                        <a href="#" class="bg-light"> How do I Review and Rate?</a>
                        <p class="bg-light" style="font-size:15px; color:black;"> 
                            ➔ Navigate to Library and then click on the game you would like to review <br>
                            ➔ In the page of the game scroll bottom and navigate to review textbox. <br>
                            ➔ Write your review and click Done. Your review has been posted <br> 
                            ➔ Rating can be done just right side of the review textbox. You can rate a game between 1 to 5 star.<br>
                            ➔ Click on any of the star to rate and when done a message will pop up. <br>
                            ➔ You can check your review below. <br>
                            ➔ If you want to Update your review you can follow the same process as above <br>
                            ➔ You can delete your review be clicking delete button located just side of 'Game Rating'.
                        </p>
                    </div>
                </div>                  
        </div>
    </div>
</section>
</div>


@endsection