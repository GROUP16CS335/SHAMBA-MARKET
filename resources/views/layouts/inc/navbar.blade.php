
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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-fixed-top" id="navbar-menu">
        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
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

<<<<<<< HEAD
<nav class="navbar navbar-expand navbar-light bg-light sub-menu">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Products<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Support</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/deliveryInf">Delivery Information</a>
            <a class="dropdown-item" href="/privacyPolicy">Privacy Policy</a>
            <a class="dropdown-item" href="/termsCondition">Terms & Conditions</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
=======
    <!-- End Atribute Navigation -->
</div>
>>>>>>> c3df8bfc602104c78f157e0eddcc6ebf41cdae0c
</nav>
<!-- End Navigation -->


