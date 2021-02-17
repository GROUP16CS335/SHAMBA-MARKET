<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHAMBA-MARKET</title>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom1.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Home.css')}}" media="screen">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>
<body>

    @include('layouts.inc.navbar')
    <div>
        @yield('content')
    </div>
    <br>
    @include('layouts.inc.footer')
</body>
  <script src="{{asset('js/custom1.js')}}"></script>
  <!-- ALL JS FILES -->
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- ALL PLUGINS -->
  <script src="{{asset('js/jquery.superslides.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-select.js')}}"></script>
  <script src="{{asset('js/inewsticker.js')}}"></script>
  <script src="{{asset('js/bootsnav.js.')}}"></script>
  <script src="{{asset('js/images-loded.min.js')}}"></script>
  <script src="{{asset('js/isotope.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/baguetteBox.min.js')}}"></script>
  <script src="{{asset('js/form-validator.min.js')}}"></script>
  <script src="{{asset('js/contact-form-script.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
</html>
