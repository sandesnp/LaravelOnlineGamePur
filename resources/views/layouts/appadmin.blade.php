<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

 <!-- Stylesheet -->
 <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}" >

 {{-- Admin Panel CSS --}}
 <link rel="stylesheet" type="text/css" href="{{ asset('css/light-bootstrap-dashboard.css?v=2.0.0') }}" >



 <!-- ##### All Javascript Script ##### -->
 <!-- jQuery-3.4.1 js -->
 <script src="{{ asset('js/jquery/jquery.min.js') }}" ></script>


 {{-- FOR ADMIN PANEL --}}
 <script src="{{ asset('js/light-bootstrap-dashboard.js?v=2.0.0') }}" ></script>

</head>
<body>                   
    @yield('content')        
</body>
</html>