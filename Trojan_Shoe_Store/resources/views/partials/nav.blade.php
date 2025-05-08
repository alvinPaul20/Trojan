<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="logo" href="{{ url('/') }}" aria-current="page active">
      <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="" width="100" height="64">
    </a>
    <a class="navbar-brand text-success text-center" href="{{ url('/') }}">TROJAN</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-evenly" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/deals') }}">Weekly-deals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/bestsellers') }}">Bestsellers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            All
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/new') }}">New Arrivals!</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Values</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Contact Us</a></li>
          </ul>
        </li>
      </ul>

      <form class="d-flex form-icons justify-content-center">
        <input class="form-control" type="text" placeholder="Search ">
        <div class="btn-group d-flex icon container-fluid">
          <a href="#"><i class="fa-solid fa-magnifying-glass icons position-absolute text-dark"></i></a>
          <a href="{{ url('/cart') }}" class="text-dark carts">
            <span class="position-absolute">
              <i class="fa-solid fa-cart-shopping icons"></i>
              <span style="font-size: 13px;font-weight: 700" class="text-success" id="count">0</span>
            </span>
          </a>
          <a href="#" id="icon-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user icons position-absolute text-dark"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="icon-dropdown">
            @auth
              <!-- If the user is authenticated, show the account link -->
              <li><a class="dropdown-item" href="{{ url('/account') }}">Account</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
  <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      Logout
  </a>
</li>

            @else
              <!-- If the user is not authenticated, show the login link -->
              <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a></li>
            @endauth
          </ul>
        </div>
      </form>
    </div>
  </div>
</nav>
