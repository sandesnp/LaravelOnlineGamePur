<div class="sidebar" >
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/assignment/public/adash/" class="simple-text">
                ADMIN PANEL
            </a>
        </div>
        <ul class="nav">
            <li >
                <a class="nav-link" href="/assignment/public/adash/" >
                    <p style="color:white;">Dashboard</p>
                </a>
            </li>
            <li >
                <a class="nav-link" href="/assignment/public/auser/" >
                    <p style="color:white;">user BREAD</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="/assignment/public/aproduct">
                   
                  <p style="color:white;">Product BREAD</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="/assignment/public/arequirement">
                   
                  <p style="color:white;">Requirement BREAD</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="/assignment/public/awallet">
                   
                  <p style="color:white;">Wallet BREAD</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="/assignment/public/areview">
                   
                  <p style="color:white;">Review BREAD</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="/assignment/public/afaq">
                    
                    <p style="color:white;">FAQ</p>
                </a>
            </li>
            <li class="nav-item active active-pro">
                <a class="nav-link active" href="/assignment/public/">
                    <i class="nc-icon nc-alien-33"></i>
                    <p style="color:white;" >Go Game Pasal</p>
                </a>
            </li>
          

        </ul>
    </div>
</div>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{$site}} </a>
            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->