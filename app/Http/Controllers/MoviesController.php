<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Movies = Movies::all();
        return view('netflix.movies', compact('Movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('netflix.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
       {
        // $Movies = New Movies();
        // $Movies->movie_name = $request->name;
        // $Movies->movie_description = $request->description;
        // $Movies->movie_gener = $request->gener;
        // $Movies->save();

        Movies::create($request->all());
            
        return response('Everything is ok');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(Movies $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $MovieEdit = Movies::findorFail($id); //(it works only with id) to get the data of that id then compare , if the id is there it will bring the data, else give error 404
    //    $MovieEdit = Movies::where('id',$id)->first(); //  method 2 -- when id = id - get the data of the first row
       return view('netflix.edit',compact('MovieEdit'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $MovieEdit = Movies::findorFail($id);

        // $MovieEdit->movie_name = $request->name;
        // $MovieEdit->movie_description = $request->description;
        // $MovieEdit->movie_gener = $request->gener;
        // $MovieEdit->save();


        $MovieEdit->update($request->all());
            
        
        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Movies::findorFill($id)->delete();
        Movies::destroy($id);
        return redirect()->route('movies.index');
    }

}

  
