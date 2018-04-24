<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Digital Harrisburg</a>
  <form class="form-inline">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..." aria-label="Searchbar" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
        </div>
      </div>
    </form>
    <!-- Toggle Navigation -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <!-- Right Side of Navbar -->
      <ul class="navbar-nav justify-content-end">
        @if (Auth::check())
        
        @endif
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/collections">Collections</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/maps">Maps</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
<!--         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Projects
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">City Beautiful</a>
            <a class="dropdown-item" href="#">City Social</a>
          </div>
        </li> -->
        @if (!Auth::check())
          <li><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
            <ul class="dropdown-menu" role="menu">
              <li><a class="nav-link" href="/dashboard"><i class="fa fa-btn fas fa-tachometer-alt"></i> Dashboard</a></li>
              <li><a href="{{ url('/logout') }}" class="nav-link"><i class="fa fa-btn fa-sign-out-alt"></i> Logout</a></li>
            </ul>
          </li>
        @endif
      </ul>
    </div>
  </div>
  
</nav>