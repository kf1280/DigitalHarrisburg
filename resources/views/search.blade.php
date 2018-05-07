@extends('layouts.app')

@section('title', '- Search Results')

@section('content')
<div class="container-fluid my-4">
  <div class="row">
    <div class="col-md-12">
      <h1>Search Results</h1>
      @if ($features->isEmpty() and $collections->isEmpty() and $maps->isEmpty() and $blogs->isEmpty()) 
      <p class="lead text-center">Your query did not return any results. Please refine your search and try again.</p>
      @endif
      @if (!$collections->isEmpty())
      <div class="row" id="collections">
        <div class="col-md-12">
          <h3 class="mt-5">Collections</h3>
          <hr>
        </div>
        @foreach($collections as $collection)
          @if($collection->published === 'Yes')
            <div class="col-4 d-flex align-items-stretch">
              <div class="card mt-2">
                <div class="card-header"><a href="/collections/{{$collection->id}}">{{$collection->title}}</a></div>
                <div class="card-img-top">
                  <img src="..\..\public\images\placeholder.png" alt="" class="w-100">
                </div>
              </div>
            </div>
          @endif
        @endforeach
      </div> 
      @endif
      @if (!$maps->isEmpty())
      <div class="row" id="maps">
         <div class="col-md-12">
          <h3 class="mt-5">Maps</h3>
          <hr>
        </div>
      @foreach($maps as $map)
        @if($map->published === 'Yes')
          <div class="col-4 d-flex align-items-stretch">
          <div class="card mt-2">
            <div class="card-header"><a href="/maps/{{$map->id}}">{{$map->title}}</a></div>
            <div class="card-img-top">
              <img src="..\..\public\images\sample-map.jpg" alt="" class="w-100">
            </div>
          </div>
        </div>
        @endif
      @endforeach
      </div>
      @endif
      @if (!$features->isEmpty())
      <div class="row" id="features">
         <div class="col-md-12">
          <h3 class="mt-5">Features</h3>
          <hr>
        </div>
        @foreach($features as $feature)
          @if($feature->published === 'Yes')
          <div class="col-4 d-flex align-items-stretch">
            <div class="card mt-2" align-items="center">
              <div class="card-header"><a href="/features/{{$feature->id}}">{{$feature->title}}</a></div>
              <div class="card-img-top">
                <img src="{{URL::to('/images/' . $feature->image)}}" alt="" class="w-100">
              </div>
              <div class="card-body">
                {{$feature->content}}
              </div>
            </div>
          </div>
          @endif
        @endforeach
      </div>
      @endif
      @if (!$blogs->isEmpty())
      <div class="row" id="blogs">
         <div class="col-md-12">
          <h3 class="mt-5">Blogs</h3>
          <hr>
        </div>
        @foreach($blogs as $blog)
          @if($blog->published === 'Yes')
          <div class="col-4 d-flex align-items-stretch">
            <div class="card mt-2" align-items="center">
              <div class="card-header"><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a></div>
              <div class="card-img-top">
                <img src="{{URL::to('/images/' . $blog->image)}}" alt="" class="w-100">
              </div>
              <div class="card-body">
                {!! $blog->content !!}
              </div>
            </div>
          </div>
          @endif
        @endforeach
      </div>
      @endif
    </div>
  </div>
</div>
@endsection