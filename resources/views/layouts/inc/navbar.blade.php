
<nav class="navbar navbar-expand navbar-light bg-light main-menu" style="box-shadow:none">
  <div class="container">
    <a class="navbar-brand" href="#">
      <h4 class="font-weight-bold">SHAMBA MARKET</h4>
    </a>

    <div class="collapse navbar-collapse">
      <form class="form-inline">
        <input class="form-control" type="search" placeholder="Search for products... " aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
      </form>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-link" href="#"><i class="fa fa-shopping-cart"></i> <span class="badge badge-danger">3</span></a>
        </li>

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
      </ul>
    </div>
    </div>
</nav>

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
</nav>
