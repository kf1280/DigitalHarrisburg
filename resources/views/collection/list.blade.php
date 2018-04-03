@extends('layouts.app')

@section('title', ' - Collections')

@section('content')

  <div class="container-fluid">
    <section class="header">
      <h1 class="display-4">Collections</h1>
      <hr>
    </section>
    
    <div class="row">
      @foreach($collections as $collection)
        <div class="col-12">
          <div class="jumbotron jumbotron-fluid">
          <div class="container-fluid">
            <h1 class="display-5"><a href="/collections/{{$collection->id}}">{{$collection->title}}</a></h1>
            <hr class="my-1">
            <p class="lead ex">{{$collection->content}}</p>
          </div>
        </div>
        </div>
      @endforeach
    </div>
    
  </div>

@endsection