<nav class="navbar navbar-expand flex-column flex-md-row bd-navbar topnav">
  <a class="navbar-brand" href="#">
      <strong>{{config('app.name', 'Laravel')}}</strong> 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarText">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SHOP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SIGN IN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SIGN UP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>