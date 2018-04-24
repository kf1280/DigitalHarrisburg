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
            <li class="list-group-item"><a href="">GIS</a></li>
            <li class="list-group-item"><a href="">Greeks</a></li>
            <li class="list-group-item"><a href="">Digital History</a></li>
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
      <div class="col-md-6">
        <div class="side-custom-content ml-3 mt-0">
          <h2 class="fs-16 font-regular mb-20 mt-6">
          </h2>
          <div class="container">
            <h3 class="font-weight-bold">{{$blog->title}} <span class="text-muted">{{$blog->author}}</span></a>
            </h3>
            <h5>
              {{$blog->updated_at->format('m/d/Y')}}
            </h5>
            <img src="{{URL::to('/images/' . $blog->image)}}" style="max-width: 60%; max-height: 60%; margin-left: auto; margin-right: auto;">
            <h6 style="margin-top: 10px">
              {{$blog->content}}
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection