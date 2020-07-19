
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="100ms">
                            <div class="widget-title">
                                <a href="/assignment/public/"><img src="/assignment/public/img/core-img/logo2.png" alt=""></a>
                            </div>
                            <div class="widget-content">
                                <p>Online game distributing website, Game Pasal, will allow customers to review their purchases.</p>
                            </div>
                        </div>
                    </div>

                     <!-- Single Footer Widget -->
                     <div class="col-12 col-sm-6 col-lg-6">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="300ms">
                            <div class="widget-title">
                                <h4>Some FAQ</h4>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="/assignment/public/faq/.#faq1" style="font-size:20px;">▶ Help, Login & Registration</a></li>
                                    <li><a href="/assignment/public/faq/.#faq2" style="font-size:20px;">▶ Purchase Game</a></li>
                                    <li><a href="/assignment/public/faq/.#faq3" style="font-size:20px;">▶ Reving & Rating</a></li>
                                </ul>
                            </div>
                        </div>


                     </div>
    
                        <!-- Single Footer Widget -->

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="300ms">
                            <div class="widget-title">
                                <h4>Recent Visiters</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        @if(isset($contact))
                                        @foreach($contact as $contacts)
                                        <li><a>➣ {{$contacts->name}}</a></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-sm-5">
                        <!-- Copywrite Text -->
                        <p class="copywrite-text"><a href="#"> Copyright All rights reserved </a> </p>
                    </div>
                    <div class="col-12 col-sm-7">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <ul>
                                <p class="copywrite-text"><a href="#"> Game Pasal | 2019 </a> </p>                           
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->