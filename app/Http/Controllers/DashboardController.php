<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Collection;
use App\Feature;
use App\Map;
use App\Blog;
use App\User;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');    
        $this->middleware('admin');
    }
  
    public function index() {
      
      $collections = Collection::all();
      $maps = Map::all();
      $features = Feature::all();
      $users = User::all();
      $blogs = Blog::orderBy('Title', 'desc')->get();
      
      return view('dashboard.home', ['collections' => $collections, 'maps' => $maps,
                                     'features' => $features, 'blogs' => $blogs,
                                     'users' => $users]);
    }
  
}
