@extends('layouts.app')

@section('title', '- Edit Blog')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-6 offset-3">
        <div class="card">
          <div class="card-header">Edit Blog</div>
          <div class="card-body">
            <form action="/blog/{{$blog->id}}" method="post">
              <input type="hidden" name="_method" value="PUT">
              <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" class="form-control" 
                       name="title" id="title" value="{{$blog->title}}">
              </div>
               <div class="form-group">
                <label for="author">Author: </label>
                 <input type="text" class="form-control" 
                        name="author" id="author" value="{{$blog->author}}">
              </div>
              <div class="form-group">
                <label for="content">Description: </label>
                <textarea class="form-control" name="content" 
                          id="content" rows="10">{{$blog->content}}</textarea>
                <script>
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>
              </div>
              <p class="mb-2">Upload Image:</p>
              <div class="custom-file mb-3">
               <input type="file" name="image" id="image" class="custom-file-input" accept="image/*">
               <label for="image" class="custom-file-label">Choose file...</label>
              </div>
              <div class="form-group">
                <label for="published">Publish this Blog Post?</label>
                <select class="form-control" name="published" id="published">
                  @if($blog->published === "Yes")
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