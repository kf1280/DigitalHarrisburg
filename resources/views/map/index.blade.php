@extends('layouts.app')

@section('title', '- Maps')

@section('content')
<div class="container">
  <div class="row mb-2">
    <h1 class="display-3">Maps</h1>
    <hr>
  </div>
  <div class="row">
    @foreach($maps as $map)
      <div class="col-4">
        <div class="card">
          <div class="card-header"><a href="/maps/{{$map->id}}">{{$map->title}}</a></div>
          <div class="card-img-top">
            <img src="..\..\public\images\sample-map.jpg" alt="" class="w-100">
          </div>
          <div class="card-body"></div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection