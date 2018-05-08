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
      
          <div class="accordion">
            @foreach($archive as $year => $months)
              @foreach($months as $month => $blogsByMonth)
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$month}}{{$year}}" aria-expanded="true" aria-controls="collapse{{$month}}{{$year}}">
                      {{$month}} {{$year}}
                    </button>
                  </h5>
                </div>

                <div id="collapse{{$month}}{{$year}}" class="collapse" aria-labelledby="heading{{$month}}{{$year}}" data-parent="#accordionExample">
                  <div class="card-body p-0">
         
                  <ul class="list-group list-group-flush list-unstyled margin-bottom-0">
                   @foreach($blogsByMonth as $post)
                    <li class="list-group-item"><a href="\blog\{{$post->id}}">{{$post->title}}</a></li>
                   @endforeach
                  </ul>
                    
                  </div>
                </div>
              </div>
              @endforeach
            @endforeach
          </div>
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
              <a href="\blog\{{$blog->id}}">{{$blog->title}}</a></h3>
            <h4><span class="text-muted">{{$blog->author}}</span></h4>
            <h6>
              {{$blog->created_at->format('m/d/Y')}}
            </h6>
            <h6 style="overflow: hidden;
    text-overflow: ellipsis;
    max-width: 200ch;">
              {!! $blog->content !!}
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