<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <ul class="navbar-nav">
      <a class="navbar-brand" href="{{ url('/dashboard') }}">Digital Harrisburg</a>
    </ul>
    <div class="col-md-4">
      <form action="/search" method="post">
        <div class="input-group">
          <input type="text" class="form-control" name="search" id="searchFooter"
                 placeholder="Search..." aria-label="Searchbar" aria-describedby="basic-addon2">
          <div class="input-group-append">
          <button class="input-group-text btn btn-light" id="basic-addon2"><i class="fas fa-search"></i></button>
        </div>
        </div>
      </form>
    </div>
  </div>
</nav>