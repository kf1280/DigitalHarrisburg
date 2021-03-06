@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <div class="card">
        <div class="card-header">New Map</div>
        <div class="card-body">
          <form action="/maps" method="post">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="subtitle">Subtitle</label>
                <input type="text" class="form-control" name="description">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control" name="latitude" value="40.265642">
              </div>
              <div class="form-group col-md-6">
                <label for="longitude">Longitude</label>
                <input type="text" class="form-control" name="longitude" value="-76.885157">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="zoom">Zoom Level</label>
                <input type="number" name="zoom" class="form-control" value="13">
<!--                 <select name="zoom" id="" class="form-control">
                  <option selected value="0">Far</option>
                  <option value="1">Medium</option>
                  <option value="2">Close</option>
                </select> -->
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="collection">Collection</label>
                <select name="collection" id="" class="form-control">
                  @foreach($collections as $collection)
                    <option value="{{$collection->id}}"> {{$collection->title}} </option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="description">Description</label><br>
                <textarea name="content" id="" cols="70" rows="5"></textarea>
                <script>CKEDITOR.replace( 'content' );</script>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="layer">Theme</label>
                <select name="layer" id="" class="form-control">
                  @foreach($layers as $layer)
                    <option value="{{$layer}}">{{$layer}}</option>
                  @endforeach
                </select>
              </div>
            </div>
<!--             <div class="form-row">
              <div class="form-group col-md-6">
                <div class="form-check"><input type="checkbox" class="form-check-input" name="streets" value="streets" checked><label for="">Streets</label></div>
                <div class="form-check"><input type="checkbox" class="form-check-input" name="dark" value="dark"><label for="">Dark</label></div>
                <div class="form-check"><input type="checkbox" class="form-check-input" name="light" value="light"><label for="">Light</label></div>
                <div class="form-check"><input type="checkbox" class="form-check-input" name="satellite" value="satellite"><label for="">Satellite</label></div>
              </div>
              <div class="form-group col-md-6"></div>
            </div> -->
            <div class="form-row">
              <div class="form-group col-md-12">
                <button class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection