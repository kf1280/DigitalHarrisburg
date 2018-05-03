@extends('layouts.app') @section('title', '- Blogs') @section('content')
<div class="container">


  <div class="clearfix">
    
    <div class="row">
       <div class="col-md-3">

        <div class="side-nav side-nav-custom mt-0">

          <div class="side-nav-head">
            <h4>Categories</h4>
          </div>

          <ul class="list-group list-unstyled margin-bottom-0">
            <li class="list-group-item"><a href="">GIS</a></li>
            <li class="list-group-item"><a href="">Greeks</a></li>
            <li class="list-group-item"><a href="">Digital History</a></li>
          </ul>

          <hr>

          <div class="side-nav-head">
            <h4>Timeline</h4>
          </div>

          <div class="accordion">
            @foreach($archive as $year => $months)
              @foreach($months as $month => $blogsByMonth)
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$month}}{{$year}}" aria-expanded="true" aria-controls="collapse{{$month}}{{$year}}">
                      {{$month}} {{$year}}
                    </button>
                  </h5>
                </div>

                <div id="collapse{{$month}}{{$year}}" class="collapse" aria-labelledby="heading{{$month}}{{$year}}" data-parent="#accordionExample">
                  <div class="card-body p-0">
         
                  <ul class="list-group list-group-flush list-unstyled margin-bottom-0">
                   @foreach($blogsByMonth as $post)
                    <li class="list-group-item"><a href="\blog\{{$post->id}}">{{$post->title}}</a></li>
                   @endforeach
                  </ul>
                    
                  </div>
                </div>
              </div>
              @endforeach
            @endforeach
          </div>

        </div>
         
      </div>
      <div class="col-md-9">
        <div class="side-custom-content ml-3 mt-0">
          <h2 class="fs-16 font-regular mb-20 mt-6">
          </h2>
          <div class="container">
            <h3 class="font-weight-bold">{{$blog->title}} <span class="text-muted">{{$blog->author}}</span></a>
            </h3>
            <h5>
              {{$blog->updated_at->format('m/d/Y')}}
            </h5>
            <img src="{{URL::to('/images/' . $blog->image)}}" style="max-width: 60%; max-height: 60%; margin-left: auto; margin-right: auto;">
            <h6 style="margin-top: 10px">
              {!! $blog->content !!}
            </h6>
          
            <h2 class="mt-4">Comments</h2>
            <hr>
            @if ($blog->comments->count() === 0)  
              <p class="lead text-center">There are no comments to display.</p>
            @endif 
          
           @foreach($blog->comments as $comment)
            <div class="mb-2">
               <div class="card">
                <div class="card-body">
                  <p class="card-text h5">
                    {{$comment->name}}
                    <small class="text-muted">
                       ({{$comment->email}}) posted on {{$comment->created_at->format('m/d/Y')}}
                    </small>

                    @if (Auth::check())
                    <a href="#" class="edit-comment text-dark ml-1" data-id="{{$comment->id}}" 
                       data-toggle="modal" data-target="#edit_comment_modal">
                      <small><i class="fas fa-pencil-alt"></i></small>
                    </a>
                    <a href="#" class="delete-comment pull-right text-dark" data-id="{{$comment->id}}" 
                       data-toggle="modal" data-target="#delete_comment_modal">
                      <small><i class="fas fa-times"></i></small>
                    </a>
                    @endif
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
          
           <div class="mt-4">
            <div class="card">
              <h5 class="card-header text-center">Write a Comment</h5>
              <div class="card-body">
                <form action="/comment" method="post">
                    <input type="hidden" name="type" id="type" value="App\Blog">
                    <input type="hidden" name="id" id="id" value="{{$blog->id}}">
<!--                     <input type="hidden" name="user" id="user" value="1"> -->
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="content">Comment:</label>
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
                  <h5 class="modal-title" id="edit_comment_modal_label">Edit Comment</h5>
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
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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