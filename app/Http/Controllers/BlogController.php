<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $archive = Blog::orderBy('created_at', 'desc')
        ->whereNotNull('created_at')
        ->get()
        ->groupBy(function(Blog $blog) {
            return $blog->created_at->format('Y');
        })
        ->map(function ($item) {
            return $item
                ->sortByDesc('created_at')
                ->groupBy( function ( $item ) {
                    return $item->created_at->format('F');
                });
        });
        return view('blog.blogs')->with('blogs', $blogs)->with('archive', $archive);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->author = $request->input('author');
        $blog->content = $request->input('content');
      
       if ($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $fileName = time() . "_" . $fileName;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath, $fileName);
            $blog->image = $fileName;
        }

        $blog->published = $request->input('published');
        $blog->user_id = Auth::user()->id;
        $blog->last_user = Auth::user()->id;
        $blog->save();
      
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
        $blog = Blog::find($id);
        $archive = Blog::orderBy('created_at', 'desc')
          ->whereNotNull('created_at')
          ->get()
          ->groupBy(function(Blog $blog) {
              return $blog->created_at->format('Y');
          })
          ->map(function ($item) {
              return $item
                  ->sortByDesc('created_at')
                  ->groupBy( function ( $item ) {
                      return $item->created_at->format('F');
                  });
          });
        return view('blog.blog-page')->with('blog', $blog)->with('archive', $archive);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        
        return view('blog.edit')->with('blog', $blog);
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
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->author = $request->input('author');
        $blog->content = $request->input('content');
      
       if ($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $fileName = time() . "_" . $fileName;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath, $fileName);
            $blog->image = $fileName;
        }

        $blog->published = $request->input('published');
        $blog->last_user = Auth::user()->id;
        $blog->save();
      
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
      public function reveal($id)
    {
        $blog = Blog::find($id);

        if ($blog->published === "Yes") {
          $blog->published = "No";
        } else {
          $blog->published = "Yes";
        } 

        $blog->save();

        return back();
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/dashboard');
    }
}
