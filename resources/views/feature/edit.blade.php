@extends('layouts.app')

@section('title', '- Edit Feature')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-6 offset-3">
        <div class="card">
          <div class="card-header">Edit Exhibit</div>
          <div class="card-body">
            <form action="/features/{{$feature->id}}" method="post">
              <input type="hidden" name="_method" value="PUT">
              <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" class="form-control" 
                       name="title" id="title" value="{{$feature->title}}">
              </div>
               <div class="form-group">
                <label for="author">Author: </label>
                 <input type="text" class="form-control" 
                        name="author" id="author" value="{{$feature->author}}">
              </div>
              <div class="form-group">
                <label for="content">Description: </label>
                <textarea class="form-control" name="content" 
                          id="content">{{$feature->content}}</textarea>
              </div>
              <div class="form-group">
                <label for="collection">Related Collection:</label>
                <select class="form-control" name="collection" id="collection">
                  @foreach($collections as $collection)
                    @if($feature->collection_id == $collection->id)
                      <option value="{{$collection->id}}" selected>{{$collection->title}}</option>
                    @else
                      <option value="{{$collection->id}}">{{$collection->title}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <p class="mb-2">Upload Image:</p>
              <div class="custom-file mb-3">
               <input type="file" name="image" id="image" class="custom-file-input" accept="image/*">
               <label for="image" class="custom-file-label">Choose file...</label>
              </div>
              <div class="form-group">
                <label for="published">Publish this Feature?</label>
                <select class="form-control" name="published" id="published">
                  @if($feature->published === "Yes")
                    <option value="No">No</option>
                    <option value="Yes" selected>Yes</option>
                  @else
                    <option value="No" selected>No</option>
                    <option value="Yes">Yes</option>
                  @endif
                </select>
              </div>
              <div class="form-group">
                <button class="btn btn-light btn-block">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  $('.custom-file-input').on('change', function() { 
     let fileName = $(this).val().split('\\').pop(); 
     $(this).next('.custom-file-label').addClass("selected").html(fileName); 
  });
  </script>

@endsection