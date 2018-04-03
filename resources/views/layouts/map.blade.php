<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"
          rel='stylesheet' type='text/css'>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" 
          integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" 
          crossorigin="anonymous"></script>
  
  <script src="//cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />

  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
          crossorigin="anonymous"></script>

  <title>Digital Harrisburg</title>
  <style>
    html,
    body {
      height: 100%;
      width: 100%;
    }

    #map {
      height: 500px;
    }
  </style>
</head>

<body>
  @include('partials.header')
  

  <div class="container">
    <div class="header">
      <h1 class="display-3"> {{$map->title}} </h1> <a href="/maps/{{$map->id}}/edit"><i class="fas fa-edit"></i></a>
      <h3 class="text-muted"> {{$map->description}} </h3>
      <hr>
    </div>
    <div class="content">
      <div id="map" height="500px"></div>
      <p>{!!$map->content!!}</p>
      @yield('script')
    </div>
    
    <div class="row">
      <div class="col">
        <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Markers
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <form action="/maps/{{$map->id}}/markers" method="post">
          <div class="form-row">
            <div class="form-group col-12">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-12">
              <label for="description">Description</label> <br>
              <textarea name="content" id="marker" cols="110" rows="5"></textarea>
<!--               <script>CKEDITOR.replace( 'marker' );</script> -->
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="latitude">Latitude</label>
              <input type="text" class="form-control" name="latitude">
            </div>
            <div class="form-group col-6">
              <label for="longitude">Longitude</label>
              <input type="text" class="form-control" name="longitude">
            </div>
          </div>
          <div class="form-row">
            <button class="btn btn-outline-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Circles
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <form action="/maps/{{$map->id}}/circles" method="post">
          <div class="form-row">
            <div class="form-group col-12">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-12">
              <label for="description">Description</label> <br>
              <textarea name="content" id="circle" cols="100" rows="5"></textarea>
<!--               <script>CKEDITOR.replace( 'circle' );</script> -->
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="latitude">Latitude</label>
              <input type="text" class="form-control" name="latitude">
            </div>
            <div class="form-group col-6">
              <label for="longitude">Longitude</label>
              <input type="text" class="form-control" name="longitude">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="radius">Radius (in meters)</label>
              <input type="text" class="form-control" name="radius" value="100">
            </div>
            <div class="form-group col-3">
              <label for="color">Color</label>
              <div id="cp2" class="input-group colorpicker-component"> 
                <input type="text" value="#00AABB" class="form-control" name="color" /> <span class="input-group-addon"><i></i></span> 
              </div> 
              <script> 
                $(function() { $('#cp2').colorpicker(); }); 
              </script>
            </div>
          </div>
          <div class="form-row">
            <button class="btn btn-outline-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Polygons
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
    
  </div>

  <footer class="footer">
    @include('partials.footer')
  </footer>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.js"></script>
</body>

</html>