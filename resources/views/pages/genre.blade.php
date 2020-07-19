@extends('layouts.app')


@section('content')
<div class="text-center wow fadeInUp" data-wow-delay="100ms">
    <section class="jumbotron text-center">
      <div class="container">
          
        <h1 class="jumbotron-heading">About Genre</h1>
        <p class="lead text-muted">A video game genre is a classification assigned to a video game based on its gameplay interaction rather than visual or narrative differences. A video game genre is defined by a set of gameplay challenges and are classified independently of their setting or game-world content, unlike other works of fiction such as films or books.</p>
        <small style="color:gray"> View Games Below </small>
        <p>
            <a href="/assignment/public/product" class="btn egames-btn mt-30">View Games</a>
        </p>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
             <img style="width:100%; height:230px;" src="/assignment/public/img/core-img/glo-rpg.png">
              <div class="card-body">
                <p class="card-text">A role-playing game (sometimes spelled roleplaying game; abbreviated RPG) is a game in which players assume the roles of characters in a fictional...</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="#top" class="btn btn-sm btn-outline-info">View</a>
                  </div>                
                </div>
                <hr style="border: 4px solid #87cefa;">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                    <img style="width:100%; height:230px;" src="/assignment/public/img/core-img/glo-sport.jpg">
              <div class="card-body">
                <p class="card-text">A sports game is a video game genre that simulates the practice of sports. Most sports have been recreated with a game, including team sports, track...</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                        <a href="#middle" class="btn btn-sm btn-outline-info">View</a>
                </div>                
            </div>
            <hr style="border: 4px solid #87cefa;">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                    <img style="width:100%; height:230px;" src="/assignment/public/img/core-img/glo-online.jpg">
              <div class="card-body">
                <p class="card-text">An online game is a video game that is either partially or primarily played through the Internet or any other computer network available. Online games...</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                        <a href="#bottom" class="btn btn-sm btn-outline-info">View</a>
                </div>                
            </div>
            <hr style="border: 4px solid #87cefa;">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>



<!-- ##### Featured Articles Area Start ##### -->
<section class="featured-articles-area bg-img bg-pattern bg-fixed" style="background-image: url(img/bg-img/5.jpg);">
    {{-- RPG --}}
        <!-- ##### Breadcrumb Area Start ##### -->
 <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/core-img/bk-2.jpg);">
    <div class="container h-100" id="top">
        <div class="row h-100 align-items-center">
            <!-- Breadcrumb Text -->
            <div class="col-12">
                <div class="breadcrumb-text">
                    <h2>RPG</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container" style="margin-top:40px">
        <div class="row">
            <!-- Article Thumbnail -->
            <div class="col-12 col-lg-6">
                <div class="article-thumbnail mb-100">
                    <img src="img/core-img/bk-8.jpg" alt="">
                </div>
            </div>
            <!-- Article Content -->
            <div class="col-12 col-lg-6">
                <div class="article-content mb-100">
                    <a href="#" class="post-title">What makes a role playing game?</a>
                    <p>Everyone knows what a role-playing game is. I mean, it’s so obvious, why even talk about it? 
                        They’re those games where you take the role of a protagonist who must face down world-beating odds to save the universe. You meet lots of cool characters, gain new skills and abilities, fight gnarly monsters, and watch an epic story unfold: your story. 
                        Then again, that could describe about half of all modern games, so… let’s take a step back.
                        There’s lots of different types of RPGs, and they comprise many milieus and sub-genres, growing more and more granular as we bore down. 
                        Action and strategy RPGs might be thought of as two families or orders of role-playing games, whereas the Phantasy Star series could be a species. But on the macro scale, RPGs are usually broken down into two main kingdoms: tabletop (like D&D, FATE, and and Fiasco) and video games (like Chrono Trigger, Horizon Zero Dawn, and the Final Fantasy series).</p>
                </div>
            </div>
             
                <!-- Article Content -->
                <div class="col-12 col-lg-6">
                    <div class="article-content mb-100">
                        <p> I could see arguments for LARP being a third kingdom, but for the purpose of this article, let’s say it is a phylum of tabletop since it’s physical not digital. 
                                Given that tabletop and digital RPGs are two totally different mediums that both carry the same genre label, it will be instructive to look at the two side by side and identify what they have in common. If we can do this, we should be able to say once and for all what makes an RPG an RPG..</p>
                    </div>
                </div>
                <!-- Article Thumbnail -->
             <div class="col-12 col-lg-6">
                    <div class="article-thumbnail mb-100">
                        <img src="img/core-img/bk-1.jpg" alt="">
                    </div>
                </div>
        </div>
    </div>
    {{-- SPORTS --}}
         <!-- ##### Breadcrumb Area Start ##### -->
 <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/core-img/bk-3.jpg);">
    <div class="container h-100" id="middle">
        <div class="row h-100 align-items-center">
            <!-- Breadcrumb Text -->
            <div class="col-12">
                <div class="breadcrumb-text">
                    <h2>SPORT</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container" style="margin-top:40px">
        <div class="row">
            
            <!-- Article Content -->
            <div class="col-12 col-lg-6">
                <div class="article-content mb-100">
                    <a href="#" class="post-title"> What is the difference between sports and games?</a>
                    <p>A sports game is a video game genre that simulates the practice of sports. Most sports have been recreated with a game, including team sports, track and field, extreme sports and combat sports.
                            Sports games involve physical and tactical challenges, and test the player's precision and accuracy. Most sports games attempt to model the athletic characteristics required by that sport, 
                            including speed, strength, acceleration, accuracy, and so on. As with their respective sports, these games take place in a stadium or arena with clear boundaries. 
                            Sports games often provide play-by-play and color commentary through the use of recorded audio. </p>
                </div>
            </div>
            <!-- Article Thumbnail -->
            <div class="col-12 col-lg-6">
                    <div class="article-thumbnail mb-100">
                        <img src="img/core-img/bk-9.jpg" alt="">
                    </div>
                </div>
             
                <!-- Article Content -->
                <div class="col-12 col-lg-6">
                    <div class="article-content mb-100">
                        <p> Sports games sometimes make use of different modes for different parts of the game. This is especially true in games about American football such as the Madden NFL series, where executing a pass play requires six different gameplay modes in the span of approximately 45 seconds.</p>
                    </div>
                </div>
                <!-- Article Thumbnail -->
             <div class="col-12 col-lg-6">
                    <div class="article-thumbnail mb-100">
                        <img src="img/core-img/bk-7.jpg" alt="">
                    </div>
                </div>
        </div>
    </div>
    {{-- ONLINE --}}
         <!-- ##### Breadcrumb Area Start ##### -->
 <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/core-img/bk-4.jpg);">
    <div class="container h-100" id="bottom">
        <div class="row h-100 align-items-center">
            <!-- Breadcrumb Text -->
            <div class="col-12">
                <div class="breadcrumb-text">
                    <h2>ONLINE</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container" style="margin-top:40px">
        <div class="row">
              <!-- Article Thumbnail -->
              <div class="col-12 col-lg-12">
                    <div class="article-thumbnail mb-100">
                        <img src="img/core-img/bk-5.jpg" alt="">
                    </div>
                </div>
            <!-- Article Content -->
            <div class="col-12 col-lg-6">
                <div class="article-content mb-100">
                    <a href="#" class="post-title">What is the purpose of online games?</a>
                    <p>Everyone knows what a role-playing game is. I mean, it’s so obvious, why even talk about it? 
                        They’re those games where you take the role of a protagonist who must face down world-beating odds to save the universe. You meet lots of cool characters, gain new skills and abilities, fight gnarly monsters, and watch an epic story unfold: your story. 
                        Then again, that could describe about half of all modern games, so… let’s take a step back.
                        There’s lots of different types of RPGs, and they comprise many milieus and sub-genres, growing more and more granular as we bore down. 
                        Action and strategy RPGs might be thought of as two families or orders of role-playing games, whereas the Phantasy Star series could be a species. But on the macro scale, RPGs are usually broken down into two main kingdoms: tabletop (like D&D, FATE, and and Fiasco) and video games (like Chrono Trigger, Horizon Zero Dawn, and the Final Fantasy series).</p>
                </div>
            </div>
             
                <!-- Article Content -->
                <div class="col-12 col-lg-6" style="margin-top:100px;">
                    <div class="article-content mb-100" >
                        <p> I could see arguments for LARP being a third kingdom, but for the purpose of this article, let’s say it is a phylum of tabletop since it’s physical not digital. 
                                Given that tabletop and digital RPGs are two totally different mediums that both carry the same genre label, it will be instructive to look at the two side by side and identify what they have in common. If we can do this, we should be able to say once and for all what makes an RPG an RPG..</p>
                    </div>

                    <div class="col-12 col-lg-12">
                            <div class="article-thumbnail mb-100">
                                <img src="img/core-img/bk-6.jpg" alt="">
                            </div>
                        </div>
                </div>
                <!-- Article Thumbnail -->
             
        </div>
    </div>
</section>
<!-- ##### Featured Articles Area End ##### -->


</div>
@endsection