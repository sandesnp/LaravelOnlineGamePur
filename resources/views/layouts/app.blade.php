<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

 <!-- Favicon -->
   <!--  <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}"> !-->

 <!-- Stylesheet -->
 <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}" >

 <!-- Custom Stylesheet -->
 <link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}" >

 <!-- Star-Rating Custom Css -->
 <link rel="stylesheet" type="text/css" href="{{ asset('css/star-rating.css') }}" >



 <!-- ##### All Javascript Script ##### -->
 <!-- jQuery-3.4.1 js -->
 <script src="{{ asset('js/jquery/jquery.min.js') }}" ></script>
 <!-- Popper js -->
 <script src="{{ asset('js/bootstrap/popper.min.js') }}" defer></script>
 <!-- Bootstrap js -->
 <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" defer></script>
 <!-- All Plugins js -->
 <script src="{{ asset('js/plugins/plugins.js') }}" defer></script>
 <!-- Active js -->
 <script src="{{ asset('js/active.js') }}" defer></script>
<!-- star rating -->
 <script src="{{ asset('js/star-rating.js') }}" defer></script>


</head>
<body>
    <div>
        
        @include('inc.navbar')
        <div style="background:url(/assignment/public/img/bg-img/background.jpg) fixed center; background-size:cover;"> <!--background-position background-attachment: fixed background-image !-->
        <div class="container">
            <div class="py-2">
                @include('inc.message')
                @yield('content')
                <div class="py-4">
                @include('inc.footer')
                </div>
            </div>
        </div>
        </div>
        
	</div>

</body>
</html>