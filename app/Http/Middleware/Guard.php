<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Guard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      
        if(Auth::check() and Auth::user()->role == 'Contributor') {
          
          if (strpos($request->path(), '/') !== false) {
            $id = explode('/', $request->path());
            
            if ($request->path() == 'users/' . $id[1] . '/create') {
              return redirect('/');
            }
            
            if ($request->path() == 'users/' . $id[1] . '/delete') {
              return redirect('/');
            }
            
          }
          
          if ($request->path() == 'users/create') {
            return redirect('/');
          }
          
        }
      
        if (Auth::guest()) {
          
          if (strpos($request->path(), '/') !== false) {
            $id = explode('/', $request->path());
            
            if ($request->path() == 'features/' . $id[1] . '/edit') {
              return redirect('/');
            }
            
            if ($request->path() == 'features/' . $id[1] . '/delete') {
              return redirect('/');
            }
            
            if ($request->path() == 'maps/' . $id[1] . '/edit') {
             return redirect('/');
            } 
            
            if ($request->path() == 'maps/' . $id[1] . '/delete') {
             return redirect('/');
            } 
            
            if ($request->path() == 'maps/' . $id[1] . '/publish') {
             return redirect('/');
            } 
            
            if ($request->path() == 'blogs/' . $id[1] . '/edit') {
             return redirect('/');
            } 
            
            if ($request->path() == 'blogs/' . $id[1] . '/delete') {
             return redirect('/');
            } 
            
            if ($request->path() == 'collections/' . $id[1] . '/edit') {
             return redirect('/');
            } 
            
            if ($request->path() == 'collections/' . $id[1] . '/delete') {
             return redirect('/');
            } 
            
             if ($request->path() == 'collections/' . $id[1] . '/publish') {
             return redirect('/');
            } 
            
            if ($request->path() == 'users/' . $id[1] . '/delete') {
             return redirect('/');
            } 
            
            if ($request->path() == 'publish' . $id[1]) {
              return redirect('/');
            }
            
            if ($request->path() == 'reveal' . $id[1]) {
              return redirect('/');
            }
            
             if ($request->path() == 'role' . $id[1]) {
              return redirect('/');
            }
          }
          
          if ($request->path() == 'features/create') {
            return redirect('/');
          }
          
          if ($request->path() == 'maps/create') {
            return redirect('/');
          }
          
          if ($request->path() == 'collections/create') {
            return redirect('/');
          }
          
          if ($request->path() == 'users/create') {
            return redirect('/');
          }
          
          if ($request->path() == 'blogs/create') {
            return redirect('/');
          }
          
        }

      return $next($request);
    }
}
