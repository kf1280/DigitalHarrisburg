@extends('layouts.app')

@section('title', '- Features')

@section('content')
<div class="container-fluid px-5">
  <div class="row my-4">
    <div class="col-md-12">
      <div class="card">
        <img class="card-img" src="{{ URL::to('images/placeholder.png') }}"
             alt="Placeholder Image"
             style="width: 100%; display: block; opacity: .2;">
        <div class="card-img-overlay">
          <div class="row mb-4">
           <div class="col-md-6">
             <h1 class="card-title">Feature Title</h1>
             <h3 class="card-title">Author</h3>
             <h3 class="card-title">Date</h3>
            </div>
            <div class="col-md-6">
              <img src="{{ URL::to('images/placeholder.png') }}" 
                   class="img-fluid" alt="placeholder"
                   style="width: 100%; display: block;">
            </div>
          </div>
          
          <p class="card-text">Lorem ipsum dolor amet glossier letterpress 
            mixtape asymmetrical vegan umami chartreuse etsy roof party put a 
            bird on it flannel wolf. Gochujang pitchfork butcher blue bottle,
            copper mug adaptogen typewriter gastropub seitan chambray 
            fingerstache enamel pin. Pinterest blog hoodie mumblecore put a
            bird on it small batch drinking vinegar vaporware iPhone vegan af
            blue bottle portland. Franzen tousled thundercats brunch knausgaard
            microdosing heirloom food truck chia gluten-free activated charcoal
            salvia.
          </p>

          <p class="card-text">Kinfolk humblebrag selvage hammock twee. Leggings
            air plant swag whatever, try-hard fashion axe sartorial migas. 
            Biodiesel organic sartorial tousled farm-to-table polaroid banh mi.
            Pork belly PBR&amp;B hexagon four loko pinterest celiac pour-over
            +1 artisan tousled truffaut lumbersexual selvage trust fund
            poutine. Selfies venmo kogi photo booth, gochujang artisan cardigan
            next level palo santo subway tile humblebrag pop-up. Pork belly
            gastropub drinking vinegar deep v iPhone post-ironic gentrify.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection