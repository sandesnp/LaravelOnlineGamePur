<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <!-- Logo Area -->
                    <div class="logo">
                        <a href="/assignment/public/"><img src="/assignment/public/img/core-img/logo.png" alt="" style="width:300px;height:90px;"></a>
                    </div>

                    <!-- Search & Login Area -->
                    <div class="search-login-area d-flex align-items-center" >
                        <div  class="egames-main-menu" >
                        <div class="top-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="egames-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                 <!-- Menu -->
                 <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                
                
                
                
                    <li class="nav-link">  <a  style="font-size:18px;" href="/assignment/public/">Home </a> </li>

                    <li class="nav-link dropdown">
                            <a style="font-size:18px;"  class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Game
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/assignment/public/product">All Games</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="/assignment/public/rpggame">RPG Games</a>
                              
                              <a class="dropdown-item" href="/assignment/public/sportgame">Sport Games</a>
                              <a class="dropdown-item" href="/assignment/public/onlinegame">Online Games</a>
                            </div>
                          </li>
                
                
                    <li class="nav-link">  <a  style="font-size:18px;" href="/assignment/public/pur/">Library </a> </li>
            
                
                    <li class="nav-link"><a style="font-size:18px;"  href="/assignment/public/genre">Glossary </a> </li>
                 
                    <li class="nav-link"><a style="font-size:18px;" href="/assignment/public/contact">Contact</a></li>
                
                   <li class="nav-link"><a style="font-size:18px;" href="/assignment/public/faq">Help</a></li>
                
                  </ul>
                
                        <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                    
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-link">
                        <a style="font-size:18px;" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-link">
                            <a style="font-size:18px;" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-link">
                            <a style="font-size:18px;"  href="/assignment/public/wallet"> Wallet <?php if(!empty(Session::get('walletamt' ))) {?> -> <?php echo  Session::get('walletamt' ) ; } ?>   <span class="sr-only">(current)</span></a>
                            </li>
                        <li class="nav-link dropdown">
                            <a style="font-size:18px;"   class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                {{ Auth::user()->firstname }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->id==1)
                                <a class="dropdown-item" href="/assignment/public/adash"> Admin Panel </a>
                                @endif
                                    <a class="dropdown-item" href="/assignment/public/user"> Profile Edit </a>
                                    <a class="dropdown-item" href="/assignment/public/cp"> Change Password </a>
                                    
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                    @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>