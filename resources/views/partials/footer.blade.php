<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <ul class="navbar-nav">
      <a class="navbar-brand" href="{{ url('/dashboard') }}">Digital Harrisburg</a>
      <div class="col-md-4">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search..." aria-label="Searchbar" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
          </div>
        </div>
      </div>
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
</nav>