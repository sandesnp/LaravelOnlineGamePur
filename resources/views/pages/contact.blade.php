@extends('layouts.app')

@section('content')


<div class="text-center wow fadeInUp" data-wow-delay="100ms">
<div style="background-color:white;">
 <!-- ##### Breadcrumb Area Start ##### -->
 <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/23.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <!-- Breadcrumb Text -->
            <div class="col-12">
                <div class="breadcrumb-text">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="contact-content mb-100">
                            <a href="#" class="mb-50 d-block"><img src="img/core-img/logo.png" alt=""></a>
                            <p>Game PASAL will establish a market on online market with modern triple A titles. Help us by sharing the website with others which will help us on our marketing field.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="contact-content mb-100">
                            <p>Here is our contact details should it ever be in need of our customers. On the side is shown Address, contact number and Email. You can email us at any time and our customer support will get in touch. Thank you</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="contact-content mb-100">
                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="title">
                                    <p>Address</p>
                                </div>
                                <p>1481 Creekside Lane Avila Beach, CA 931</p>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="title">
                                    <p>Phone</p>
                                </div>
                                <p>+53 345 7953 32453</p>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="title">
                                    <p>E-mail</p>
                                </div>
                                <p>gamepasalnp@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
        <section class="featured-articles-area bg-img bg-pattern" style="background-image: url(img/bg-img/5.jpg);">
            <div class="row justify-content-center">
            <!-- Contact Form Area -->
            <div class="col-12">
                <h4 class="mb-70">Get In Touch</h4>

                <!-- Contact Form -->
                <div class="contact-form-area mb-100">
                        {!! Form::Open(['action'=>'HomeController@contactsave','method'=>'POST']) !!}
                        @csrf
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <input type="text" class="form-control" name="name" placeholder="Name*">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="email" class="form-control" name="email" placeholder="Email*">
                            </div>
                            <div class="col-12">
                                <input type="hidden" class="form-control" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control" name="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn egames-btn w-100" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
       

            <div class="col-12">
                <!-- Google Maps -->
                <div class="map-area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14131.114098343258!2d85.3367605!3d27.6932393!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87fc99ad57166c55!2sCONSOLE+BAZAAR!5e0!3m2!1sen!2snp!4v1561187250483!5m2!1sen!2snp" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        </section>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->
</div>
</div>

@endsection