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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body>

    @include('layouts.inc.navbar')

    <div>
        <br>
        @yield('content')
    </div>

    @include('layouts.inc.footer')
</body>
<script src="{{asset('js/custom.js')}}"></script>
</html>