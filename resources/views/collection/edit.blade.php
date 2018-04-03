@extends('layouts.app');

@section('title', '- New Collection')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-6 offset-3">
        <div class="card">
          <div class="card-header">New Collection</div>
          <div class="card-body">
            <form action="/collections/{{$collection->id}}" method="post">
              <input type="hidden" name="_method" value="PUT">
              <div class="form-group"><label for="title">Title: </label><input type="text" class="form-control" name="title" value="{{$collection->title}}"></div>
              <div class="form-group"><label for="content">Description: </label><input type="text" class="form-control" name="content" value="{{$collection->content}}"></div>
              <div class="formgroup"><button class="btn btn-default">Submit</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection