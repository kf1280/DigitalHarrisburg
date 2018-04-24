@extends('layouts.app')

@section('title', ' - Dashboard')

@section('content')

<div class="container-fluid">

  <div class="row">
  <div class="col-2">
    <sidebar class="dashboard-navigation sidebar-nav">
      <ul class="nav flex-column list-group">
        <li class="nav-item"><a href="#collection-panel" class="nav-link list-group-item"><i class="fas fa-tachometer-alt"></i> Collections</a></li>
        <li class="nav-item"><a href="#maps-panel" class="nav-link list-group-item"><i class="far fa-map"></i> Maps</a></li>
        <li class="nav-item"><a href="#features-panel" class="nav-link list-group-item"> <i class="fas fa-archive"></i> Features</a></li>
        <li class="nav-item"><a href="#blogs-panel" class="nav-link list-group-item"><i class="far fa-comments"></i> Blogs</a></li>
      </ul>
    </sidebar>
  </div>
  
  <div class="col-10">
  
    <section class="dashboard-content">
      
      <section class="dashboard-header">
        <h2>Dashboard</h2>
        <hr>
      </section>
      
      <section class="dashboard-inner">
      
        <div class="row">
          <div class="col-9">
            <div id="collection-panel">
              <div class="card">
                <div class="card-header">Collections
                  <div class="float-right">
                    <a href="/collections/create"><i class="fas fa-plus ml-auto"></i></a>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-group">
                    @foreach($collections as $collection)
                      <li class="list-group-item"> 
                        <a href="/collections/{{$collection->id}}">{{$collection->title}}</a>
                        
                        <div class="float-right">
                          <form action="/collections/{{$collection->id}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                          </form>
                        </div>
                        <div class="float-right mr-2">
                          <a href="/collections/{{$collection->id}}/edit" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="float-right mr-2">
                          <a href="/collections/{{$collection->id}}/publish" class="btn btn-outline-success">
                            @if($collection->published === 'Yes')
                              <i class="fas fa-eye-slash"></i>
                            @else
                              <i class="fas fa-eye"></i>
                            @endif
                          </a>
                        </div>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div id="tools-panel">
              <div class="card">
                <div class="card-header">Tools</div>
                <div class="card-body">
                  @if(Auth::check() and Auth::user()->role == 'Admin')
                  <button type="button" class="btn btn-block btn-light" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-users"></i> Manage Users
                  </button>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row mt-2">
          <div class="col-9">
            <div class="maps-panel">
              <div class="card">
                <div class="card-header">Maps
                  <div class="float-right">
                    <a href="/maps/create"><i class="fas fa-plus"></i></a>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-group">
                    @foreach($maps as $map)
                      <li class="list-group-item">
                        <a href="/maps/{{$map->id}}">{{$map->title}}</a>
                        <div class="float-right">
                          <form action="/maps/{{$map->id}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                          </form>
                        </div>
                        <div class="float-right mr-2">
                          <a href="/maps/{{$map->id}}/edit" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="float-right mr-2">
                          <a href="/maps/{{$map->id}}/publish" class="btn btn-outline-success">
                            @if($map->published === 'Yes')
                              <i class="fas fa-eye-slash"></i>
                            @else
                              <i class="fas fa-eye"></i>
                            @endif
                          </a>
                        </div>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row mt-2">
          <div class="col-9">
            <div class="features-panel">
              <div class="card">
                <div class="card-header">Features
                  <div class="float-right"><a href="/features/create"><i class="fas fa-plus"></i></a></div>
                </div>
                <div class="card-body">
                  <ul class="list-group">
                    @foreach($features as $feature)
                      <li class="list-group-item">
                      <a href="/features/{{$feature->id}}">{{$feature->title}}</a>
                        <div class="float-right">
                          <form action="/features/{{$feature->id}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                          </form>
                        </div>
                        <div class="float-right mr-2">
                          <a href="/features/{{$feature->id}}/edit" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="float-right mr-2">
                          @if($feature->published === "Yes")
                          <a href="publish/{{$feature->id}}" class="btn btn-outline-success"><i class="fas fa-eye-slash"></i></a>
                          @else
                          <a href="publish/{{$feature->id}}" class="btn btn-outline-success"><i class="fas fa-eye"></i></a>
                          @endif
                        </div>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row mt-2">
          <div class="col-9">
            <div class="blogs-panel">
              <div class="card">
                <div class="card-header">Blogs
                  <div class="float-right"><a href="/blog/create"><i class="fas fa-plus"></i></a></div>
                </div>
                <div class="card-body">
                  <ul class="list-group">
                    @foreach($blogs as $blog)
                      <li class="list-group-item">
                      <a href="\blog\{{$blog->id}}">{{$blog->title}}</a>
                        <div class="float-right">
                          <form action="/blog/{{$blog->id}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                          </form>
                        </div>
                        <div class="float-right mr-2">
                          <a href="/blog/{{$blog->id}}/edit" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="float-right mr-2">
                          @if($blog->published === "Yes")
                          <a href="reveal/{{$blog->id}}" class="btn btn-outline-success"><i class="fas fa-eye-slash"></i></a>
                          @else
                          <a href="reveal/{{$blog->id}}" class="btn btn-outline-success"><i class="fas fa-eye"></i></a>
                          @endif
                        </div>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </section>
      
    </section> 
  
  </div>
  
</div>
  
  <!-- Start Manage Users Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Manage Users</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a href="/users/create" role="button" class="btn btn-light btn-block">
            <i class="fas fa-user-plus"></i> Add a User
          </a>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->role }}</td>
                  <td>
                    <a href="role/{{ $user->id }}" class="btn btn-light btn-block">
                      <i class="fas fa-exchange-alt"></i> Change Role</a>
                  </td>
                  <td>
                    <form action="/users/{{ $user->id }}" method="post">
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-light btn-block">
                        <i class="fas fa-trash-alt"></i> Delete
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Manage Users Modal -->
  
</div>

@endsection