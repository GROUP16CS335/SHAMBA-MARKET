<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
<nav class="navbar navbar-expand-lg navbar-light navbar-default bootsnav navbar-fixed-top">
    <div class="container">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
            <a class="navbar-brand" href="/"><h1><strong>SHAMBA-MARKET</strong></h1></a>
        </div>
        <!-- End Header Navigation -->

<<<<<<< HEAD
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-fixed-top" id="navbar-menu">
        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="">Contact Us</a></li>
            <li class="nav-item">
                <a class="nav-link" href="/cart">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="badge badge-danger">
                        {{Session::has('cart') ? Session::get('cart')->totalQty : ''}}
                    </span>
                </a>
            </li>
            <li>
                @if(Auth::guest())
                <li class="nav-item ml-md-3">
                <a class="btn btn-outline-primary" href="/login"><i class="fa fa-user"></i> Log In / Register</a>
=======
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-fixed-top" id="navbar-menu">
            <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart">
                        <i class="glyphicon glyphicon-chevron-right"></i>
                        <span class="badge badge-danger">
                            {{Session::has('cart') ? Session::get('cart')->totalQty : ''}}
                        </span>
                    </a>
>>>>>>> d7cec551e147d82741316737ba5471bf8cccdb58
                </li>
                <li>
                    @if(Auth::guest())
                    <li class="nav-item ml-md-3">
                    <a class="btn btn-outline-primary" href="/login"><i class="fa fa-user"></i> Log In / Register</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    </li>
                    @endif
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->



