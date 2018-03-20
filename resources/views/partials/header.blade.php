<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
    
    <!-- Toggle Navigation -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Left Side of Navbar -->
      <ul class="navbar-nav mr-auto">
          <li><a href="{{ url('/home') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/collections" class="nav-link">Collections</a></li>
      </ul>
      
      <!-- Right side of Navbar -->
      <ul class="navbar-nav">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
            <li><a href="{{ url('/register') }}" class="nav-link">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}" class="nav-link"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>
        @endif
      </ul>
    </div>
  </div>
</nav>