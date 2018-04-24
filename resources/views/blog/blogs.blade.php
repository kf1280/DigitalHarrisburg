@extends('layouts.app') @section('title', '- Blogs') @section('content')
<div class="container">


  <div class="clearfix">
    
    <div class="row">
       <div class="col-md-3">

        <div class="side-nav side-nav-custom mt-0">

          <div class="side-nav-head">
            <h4>Categories</h4>
          </div>

          <ul class="list-group list-unstyled margin-bottom-0">
            <li class="list-group-item"><a href="my-page.php">GIS</a></li>
            <li class="list-group-item"><a href="my-playlists.php">Greeks</a></li>
            <li class="list-group-item"><a href="account.php">Digital History</a></li>
          </ul>

          <hr>

          <div class="side-nav-head">
            <h4>Timeline</h4>
          </div>

          <ul class="list-group list-unstyled margin-bottom-0">
            <li class="list-group-item"><a href="my-playlists.php">January 2018</a></li>
            <li class="list-group-item"><a href="account.php">February 2018</a></li>
          </ul>

        </div>
         
      </div>
      <div class="col-md-9">
        <div class="side-custom-content ml-3 mt-0">

          <h2 class="fs-16 font-regular mb-20 mt-6">
          </h2>
          @foreach($blogs as $blog)
          @if($blog->published === "Yes")          
          <div class="container">
            <h3 class="font-weight-bold">
              <a href="\blog\{{$blog->id}}">{{$blog->title}} <span class="text-muted">{{$blog->author}}</span></a>
            </h3>
            <h5>
              {{$blog->updated_at->format('m/d/Y')}}
            </h5>
            <h6>
              {{$blog->content}}
            </h6>
          </div>
          <hr>
          @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection