<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Feature;
use App\Collection;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();
        return view('feature.index')->with('features', $features);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collections = Collection::all();
        return view('feature.new')->with('collections', $collections);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feature = new Feature;
        $feature->title = $request->input('title');
        $feature->author = $request->input('author');
        $feature->content = $request->input('content');
        
       if ($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $fileName = time() . "_" . $fileName;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath, $fileName);
            $feature->image = $fileName;
       }

        $feature->published = $request->input('published');
        $feature->collection_id = $request->input('collection');
//         $feature->user_id = Auth::user()->id;
//         $feature->last_user = Auth::user()->id;
        $feature->save();
      
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
        $feature = Feature::find($id);
        $comments = Comment::where('commentable_type', 'App\Feature')->where('commentable_id', $id)->get();
      
        return view('feature.show')->with('feature', $feature)->with('comments', $comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feature = Feature::find($id);
        $collections = Collection::all();
        return view('feature.edit')->with('feature', $feature)->with('collections', $collections);
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
        $feature = Feature::find($id);
        $feature->title = $request->input('title');
        $feature->author = $request->input('author');
        $feature->content = $request->input('content');
      
        if ($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $fileName = time() . "_" . $fileName;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath, $fileName);
            $feature->image = $fileName;
        }
      
        $feature->published = $request->input('published');
        $feature->collection_id = $request->input('collection');
        $feature->last_user = Auth::user()->id;
        $feature->save();
      
        return redirect('/dashboard');
    }
  
    /**
    * Toggle the visibility of a feature by publishing or unpublishing it
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function publish($id)
    {
        $feature = Feature::find($id);

        if ($feature->published === 'Yes') {
          $feature->published = 'No';
        } else {
          $feature->published = 'Yes';
        } 

        $feature->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = Feature::find($id);
        $feature->delete();
        return redirect('/dashboard');
    }
}
