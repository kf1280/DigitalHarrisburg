@extends('layouts.app')

@section('title', '- Features')

@section('content')
<div class="container-fluid px-5">
  <div class="row my-4">
    <div class="col-md-12">
      <div class="card">
        <img class="card-img" src="{{URL::to('/images/' . $feature->image)}}"
             alt="Placeholder Image"
             style="width: 100%; display: block; opacity: .2;">
        <div class="card-img-overlay">
          <div class="row mb-4">
           <div class="col-md-6">
             <h1 class="card-title">{{$feature->title}}</h1>
             <h3 class="card-title">{{$feature->author}}</h3>
             <h3 class="card-title">{{$feature->created_at->format('m/d/Y')}}</h3>
            </div>
            <div class="col-md-6">
              <img src="{{URL::to('/images/' . $feature->image)}}" 
                   class="img-fluid" alt="placeholder"
                   style="width: 100%; display: block;">
            </div>
          </div>
          
          <p class="card-text">{{$feature->content}}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Comments</h2>
      <hr>
      @if ($feature->comments->count() === 0)  
        <p class="lead text-center">There are no comments to display.</p>
      @endif  
    </div>
      
    
      @foreach($feature->comments as $comment)
      <div class="col-md-12 mb-2">
         <div class="card">
          <div class="card-body">
            <p class="card-text h5">
              {{$comment->user->name}}
              <small class="text-muted">
                  posted on {{$comment->created_at->format('m/d/Y')}}
              </small>
              
              <a href="#" class="edit-comment text-dark ml-1" data-id="{{$comment->id}}" 
                 data-toggle="modal" data-target="#edit_comment_modal">
                <small><i class="fas fa-pencil-alt"></i></small>
              </a>
              <a href="#" class="delete-comment pull-right text-dark" data-id="{{$comment->id}}" 
                 data-toggle="modal" data-target="#delete_comment_modal">
                <small><i class="fas fa-times"></i></small>
              </a>
            </p>
            
            <p class="card-text mb-0">{{$comment->content}}</p>
            @if ($comment->created_at != $comment->updated_at)
              <p class="mb-0">
                <small class="text-muted">
                  -- last edited on {{$comment->updated_at->format('m/d/Y')}}
                </small>
              </p>
              @endif
          </div>
        </div>
      </div>
      @endforeach
   
    <div class="col-md-12 mt-4">
      <form action="/comment" method="post">
        <input type="hidden" name="type" id="type" value="App\Feature">
        <input type="hidden" name="id" id="id" value="{{$feature->id}}">
        <input type="hidden" name="user" id="user" value="1">
        <div class="form-group">
          <label for="content" class="lead">Write a Comment:</label>
          <textarea class="form-control" name="content" id="content"></textarea>
        </div>
        <button type="submit" class="btn btn-light btn-block">Add Comment</button>
      </form>
    </div>

  </div>
</div>

<!-- Start Edit Comment Modal -->
<div class="modal fade" id="edit_comment_modal" tabindex="-1" role="dialog" 
     aria-labelledby="edit_comment_modal_label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit_comment_modal_label">Edit Your Comment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="edit_comment_form" action="#" method="post">
        <input type="hidden" name="_method" value="PUT">
        <div class="modal-body">
            <label for="edit_comment">Edit Comment:</label>
            <textarea class="form-control" name="edit_comment" id="edit_comment" rows="6"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</a>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Edit Comment Modal -->

<!-- Start Delete Comment Modal -->
<div class="modal fade" id="delete_comment_modal" tabindex="-1" role="dialog" 
     aria-labelledby="delete_comment_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete_comment_modal_label">Delete Comment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="lead text-center">Are you sure you wish to delete this comment?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form id="delete_comment_form" action="#" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger">Delete Comment</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Delete Comment Modal -->

<script>
  $(".edit-comment").click(function(e) {
    let id = $(this).data("id");
    
    $.getJSON("/comment/" + id + "/edit", function() {
      console.log("Success!");
    })
      .done(function(data) {
        $("#edit_comment").html(data.content);
        $("#edit_comment_form").attr("action", "/comment/" + data.id);
      
    })
      .fail(function() {
        console.log("error");
    });
  }); 
  
  $(".delete-comment").click(function(e) {
    let id = $(this).data("id");
    
    $("#delete_comment_form").attr("action", "/comment/" + id);
  });
</script>

@endsection