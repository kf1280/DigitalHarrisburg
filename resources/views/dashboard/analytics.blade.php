@extends('layouts.app')

@section('title', ' - Dashboard/Analytics')

@section('content')

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  google.charts.setOnLoadCallback(mapChart);
  
//   function getRandomColor() {
//   var letters = '0123456789ABCDEF';
//   var color = '#';
//   for (var i = 0; i < 6; i++) {
//     color += letters[Math.floor(Math.random() * 16)];
//   }
//   return color;
// }

  
  function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Collection');
        data.addColumn('number', 'Views');
        data.addRows([
          @foreach($collections as $collection)
            ['{{$collection->title}}', {{$collection->views}}],
          @endforeach
        ]);

        // Set chart options
        var options = {'title':'Views per Collection'};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('collections'));
        chart.draw(data, options);
      };
  
  function mapChart() {
    var data = new google.visualization.DataTable();
        data.addColumn('string', 'Map');
        data.addColumn('number', 'Views');
        data.addRows([
          @foreach($maps as $map)
            ['{{$map->title}}', {{$map->views}}],
          @endforeach
        ]);

        // Set chart options
        var options = {'title':'Views per Map'};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('maps'));
        chart.draw(data, options);
  }
  
</script>

<div class="container-fluid">

  <div class="row">
  <div class="col-2">
    <sidebar class="dashboard-navigation sidebar-nav">
      <ul class="nav flex-column list-group mt-5">
        <li class="nav-item mt-1"><a href="#collection-panel" class="nav-link list-group-item"><i class="fas fa-tachometer-alt"></i> Collections</a></li>
        <li class="nav-item"><a href="#maps-panel" class="nav-link list-group-item"><i class="far fa-map"></i> Maps</a></li>
        <li class="nav-item"><a href="#features-panel" class="nav-link list-group-item"> <i class="fas fa-archive"></i> Features</a></li>
        <li class="nav-item"><a href="#blogs-panel" class="nav-link list-group-item"><i class="far fa-comments"></i> Blogs</a></li>
        <li class="nav-item"><a href="#" class="nav-link list-group-item"><i class="fas fa-chart-area"></i> Analytics</a></li>
      </ul>
    </sidebar>
  </div>
  
  <div class="col-8">
  
    <section class="dashboard-content">
      
      <section class="dashboard-header">
        <h2>Analytics</h2>
        <hr>
      </section>
      
      <section class="dashboard-inner">
      
        
        <div class="row">
          
          <div class="col-4">
            <div class="card">
            <div class="card-header">Collections</div>
            <div class="card-body">
              <div class="card-title">Total Collection Views: </div>
              <div class="card-text">Views this week: </div>
            </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
            <div class="card-header">Maps</div>
            <div class="card-body">
              <div class="card-title">Total Map Views: </div>
              <div class="card-text">Views this week: </div>
            </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
            <div class="card-header">Features</div>
            <div class="card-body">
              <div class="card-title">Total Feature Views: </div>
              <div class="card-text">Views this week: </div>
            </div>
            </div>
          </div>
        
          
          
          
          
          
          
        </div>
        
        <div class="row" id="collections"></div>
        <div class="row" id="maps"></div>
        
        
        
        
        
      
      </section>
      
    </section> 
  
  </div>
 
</div>
  
  
  
</div>

@endsection