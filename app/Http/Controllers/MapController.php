<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

use App\Map;
use App\Collection;
use App\Marker;
use App\Coordinate;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $maps = Map::all();  
      return view('map.index')->with('maps', $maps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $collections = Collection::all(); 
      $layers = array('streets', 'streets-satellite', 'light', 'dark', 'high-contrast', 'wheatpaste', 'comic', 'pirates');
      return view('map.new')->with('collections', $collections)->with('layers', $layers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $map = new Map;
      $map->title = $request->input('title');
      $map->description = $request->input('description');
      $map->latitude = $request->input('latitude');
      $map->longitude = $request->input('longitude');
      $map->collection_id = $request->input('collection');
      $map->content = $request->input('content');
      $map->zoom = $request->input('zoom');
//       if($zoom == 0) {
//         $map->zoom = 13;
//       } elseif($zoom == 1) {
//         $map->zoom = 14;
//       } else {
//         $map->zoom = 15;
//       };
      $map->layer = $request->input('layer');
      
      
      $map->save();
      
      return redirect('/maps/'.$map->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $map = Map::find($id);
      $markers = DB::table('markers')->where('markers.map_id', '=', $id)->get();
//       $polygons = DB::table('markers')->join('coordinates', 'markers.id', '=', 'coordinates.marker_id')->where('markers.type', '=', 'Polygon')->get();
      //return $polygons;
      
      return view('map.show')->with('map', $map)->with('markers', $markers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $map = Map::find($id);
        $collections = Collection::all();
        $layers = array('streets', 'streets-satellite', 'light', 'dark', 'high-contrast', 'wheatpaste', 'comic', 'pirates');
        return view('map.edit')->with('map', $map)->with('collections', $collections)->with('layers', $layers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $map = Map::find($id);
      $map->title = $request->input('title');
      $map->description = $request->input('description');
      $map->latitude = $request->input('latitude');
      $map->longitude = $request->input('longitude');
      $map->collection_id = $request->input('collection');
      $map->content = $request->input('content');
      $map->zoom = $request->input('zoom');
//       if($zoom == 0) {
//         $map->zoom = 13;
//       } elseif($zoom == 1) {
//         $map->zoom = 14;
//       } else {
//         $map->zoom = 15;
//       };
      $map->layer = $request->input('layer');
      
      $map->save();
      
      return redirect('/maps/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $map = Map::find($id);
        $map->delete();
        return redirect('/dashboard');
    }
  
    public function storeMarker(Request $request, $id)
    {
      $marker = new Marker;
      $marker->title = $request->input('title');
      $marker->content = $request->input('content');
      $marker->type = 'Marker';
      $marker->map_id = $id;
      $marker->latitude = $request->input('latitude');
      $marker->longitude = $request->input('longitude');
      $marker->color = $request->input('color');
      $marker->color2 = $request->input('color2');
      $marker->icon = $request->input('icon');
      $marker->save();
      
//       $marker = DB::table('markers')->latest()->first();
      
//       $coordinate = new Coordinate;
//       $coordinate->latitude = $request->input('latitude');
//       $coordinate->longitude = $request->input('longitude');
//       $coordinate->marker_id = $marker->id;
//       $coordinate->save();
      
      return redirect('/maps/'.$id);
    }
  
  public function storeCircle(Request $request, $id)
  {
    $marker = new Marker;
    $marker->title = $request->input('title');
    $marker->type = 'Circle';
    $marker->content = $request->input('content');
    $marker->map_id = $id;
    $marker->radius = $request->input('radius');
    $marker->color = $request->input('color');
    $marker->latitude = $request->input('latitude');
    $marker->longitude = $request->input('longitude');
    $marker->save();
    
//     $marker = DB::table('markers')->latest()->first();
    
//     $coordinate = new Coordinate;
//     $coordinate->latitude = $request->input('latitude');
//     $coordinate->longitude = $request->input('longitude');
//     $coordinate->marker_id = $marker->id;
//     $coordinate->save();
    
    return redirect('/maps/'.$id);
    
  }
  
//   public function deleteMarker($id)
//   {
//     $marker = Marker::find($id);
//     $marker->delete();
//     return back();
    
//   }
  
  public function publish($id)
  {
    
    $map = Map::find($id);
    if($map->published === 'Yes') {
      $map->published = 'No';
    } else {
      $map->published = 'Yes';
    }
    
    $map->save();
    
    return back();
    
  }
  
}
