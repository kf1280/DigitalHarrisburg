@extends('layouts.app')

@section('title', '- Blog')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-6 offset-3">
        <div class="card">
          <div class="card-header">New Blog Post</div>
          <div class="card-body">
            <form action="/blog" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" class="form-control" name="title" id="title">
              </div>
               <div class="form-group">
                <label for="author">Author: </label>
                 <input type="text" class="form-control" name="author" id="author">
              </div>
              <div class="form-group">
                <label for="content">Blog Text: </label>
                <textarea class="form-control" name="content" id="content" rows="10"></textarea>
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
                <label for="published">Publish this Blog?</label>
                <select class="form-control" name="published" id="published">
                  <option value="No">No</option>
                  <option value="Yes">Yes</option>
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