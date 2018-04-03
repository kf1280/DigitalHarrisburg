<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Digital Harrisburg</a>

    <!-- Toggle Navigation -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-md-4">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..." aria-label="Searchbar" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
        </div>
      </div>
    </div>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <!-- Left Side of Navbar -->
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">Dashboard</a>
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
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Projects
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">City Beautiful</a>
          <a class="dropdown-item" href="#">City Social</a>
        </div>
      </li>
<!--         <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> About</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item nav-link" type="button"><a href="/about">Learn More</a></button>
              <button class="dropdown-item nav-link" type="button">Contributors</button>
            </div>
          </div>
        </li>
        <!--<li class="nav-item"><a href="/collections" class="nav-link">Browse</a>
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Browse</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item nav-link" type="button"><a href="/collections">Collections</a></button>
              <button class="dropdown-item nav-link" type="button"><a href="/blog">Blogs</a></button>
              <button class="dropdown-item nav-link" type="button"><a href="/maps">Maps</a></button>
            </div>
          </div>
        </li> -->
<!--         <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Projects</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item nav-link" type="button">City Beautiful</button>
              <button class="dropdown-item nav-link" type="button">City Social</button>
            </div>
          </div>
        </li> -->
      </ul>

      <!-- Right side of Navbar -->

    </div>
  </div>
</nav>