@extends('layouts.app')

@section('title', '- Collections')

@section('content')

<div class="container">
  
  <div class="row" id="header">
    <div class="col">
      <h1 class="display-3">{{$collection->title}}</h1>
      <h2 class="text-muted">{{$collection->content}}</h2>
      <hr>
    </div>
  </div>
  
  <div class="row" id="maps">
    @foreach($maps as $map)
      @if($map->published === 'Yes')
        <div class="col-4">
        <div class="card mt-2">
          <div class="card-header"><a href="/maps/{{$map->id}}">{{$map->title}}</a></div>
          <div class="card-img-top">
            <img src="{{URL::to('/images/sample-map.jpg')}}" alt="" class="w-100">
          </div>
          <div class="card-body"></div>
        </div>
      </div>
      @endif
    @endforeach
  </div>
  
  <div class="row" id="features">
    @foreach($features as $feature)
      @if($feature->published === 'Yes')
      <div class="col-4">
        <div class="card mt-2" allign-items="center">
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
  
</div>

@endsection