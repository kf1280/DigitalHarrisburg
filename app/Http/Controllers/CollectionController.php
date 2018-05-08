<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Collection;
use App\Map;
use DB;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::all();
        return view('collection.list')->with('collections', $collections);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collection.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collection = new Collection;
        $collection->title = $request->input('title');
        $collection->content = $request->input('content');
        $collection->save();
      
      //create map
      
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collection = Collection::find($id);
        $collection->views = $collection->views + 1;
        $collection->save();
      
        $features = DB::table('features')->where('collection_id', '=', $id)->get();
        
        $maps = DB::table('maps')->where('collection_id', '=', $id)->get();
      
        return view('collection.show')->with('collection', $collection)->with('features', $features)->with('maps', $maps);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collection = Collection::find($id);
        return view('collection.edit')->with('collection', $collection);
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
        $collection = Collection::find($id);
        $collection->title = $request->input('title');
        $collection->content = $request->input('content');
        $collection->save();
      
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collection = Collection::find($id);
        $collection->delete();
        return redirect('/dashboard');
    }
  
  public function publish($id)
    {
        $collection = Collection::find($id);

        if ($collection->published === 'Yes') {
          $collection->published = 'No';
        } else {
          $collection->published = 'Yes';
        } 

        $collection->save();

        return back();
    }

  
}
