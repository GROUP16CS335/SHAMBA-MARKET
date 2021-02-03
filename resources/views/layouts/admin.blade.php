<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/custom_admin.css') }}" rel="stylesheet">

</head>
<body>
    <!-- Main Navigation -->
    <header>
        @include('layouts.inc.admin-navbar')
        @include('layouts.inc.admin-sidebar')
    </header>
   <!--Main Navigation-->

    <main class="pt-5 mx-lg-5">
        @yield('content')
    </main>
    @include('layouts.inc.footer')
</body>
<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>

</html>
