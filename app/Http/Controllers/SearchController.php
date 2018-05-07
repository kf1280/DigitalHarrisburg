<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Feature;
use App\Map;
use App\Blog;
use App\Collection;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
      $search = $request->input('search');
      $features = Feature::where('title', 'LIKE', '%' . $search . '%')->get();
      $collections = Collection::where('title', 'LIKE', '%' . $search . '%')->get();
      $maps = Map::where('title', 'LIKE', '%' . $search . '%')->get();
      $blogs = Blog::where('title', 'LIKE', '%' . $search . '%')->get();
      
       return view('search', ['collections' => $collections, 'maps' => $maps,
                                     'features' => $features, 'blogs' => $blogs]);
    }
}
