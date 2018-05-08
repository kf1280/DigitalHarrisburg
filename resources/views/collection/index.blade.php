@extends('layouts.app')

@section('title', '- Collections')

@section('content')

<div class="container">
  
  <div class="row">
    <h1 class="display-3">Collections</h1>
    <hr>
  </div>
  
  <div class="row">
    @foreach($collections as $collection)
      <div class="col-6 mt-2">
        <div class="card">
          <div class="card-header">
            <a href="/collections/{{$collection->id}}">{{$collection->title}}</a>
            
          </div>
          <!--<img src="https://flowersfamilyproject.files.wordpress.com/2014/03/rachel-flowers-in-class-21-e1399262328639.jpg" height="400px" width="60px" alt="" class="card-img-top"> -->
          <div class="card-body"> {{$collection->content}} </div>
<!--           <form action="/collections/{{$collection->id}}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-outline-danger">Delete</button>
          </form> -->
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection