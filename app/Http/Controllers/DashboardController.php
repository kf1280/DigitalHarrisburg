<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Collection;
use App\Feature;
use App\Map;

class DashboardController extends Controller
{
    public function index() {
      
      $collections = Collection::all();
      $maps = Map::all();
      $features = Feature::all();
      
      return view('dashboard.home')->with('collections', $collections)->with('maps', $maps)->with('features', $features);
    }
  
  
  
  
}
