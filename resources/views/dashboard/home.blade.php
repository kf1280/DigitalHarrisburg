@extends('layouts.app')

@section('title', ' - Dashboard')

@section('content')

<div class="container-fluid">

  <div class="row">
  <div class="col-2">
    <sidebar class="dashboard-navigation sidebar-nav">
      <ul class="nav flex-column list-group">
        <li class="nav-item"><a href="/dashboard" class="nav-link list-group-item"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="nav-item"><a href="/" class="nav-link list-group-item"><i class="far fa-comments"></i>  Blogs</a></li>
        <li class="nav-item"><a href="" class="nav-link list-group-item">Collections</a></li>
        <li class="nav-item"><a href="" class="nav-link list-group-item">Features</a></li>
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
                          <a href="/collections/{{$collection->id}}" class="btn btn-outline-success"><i class="fas fa-eye"></i></a>
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
                <div class="card-body"></div>
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
                          <a href="/maps/{{$map->id}}" class="btn btn-outline-success"><i class="fas fa-eye"></i></a>
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
            <div class="features-panel">
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
  
</div>

@endsection