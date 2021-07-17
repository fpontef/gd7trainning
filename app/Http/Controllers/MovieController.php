<?php

namespace App\Http\Controllers;

use App\Models\Movie as Movie;
use App\Http\Resources\Movie as MovieResource;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // OBSERVACOES
        //$movies = auth('api')->user()->metodo_provider_ou_model();
        //$data['user_id'] = auth('api')->user()->id;
        // $data['user_role'] = auth('api')->user()->role;
        // $data = auth('api')->user()->role;

        $movies = Movie::all();

        if($request->is('api/*')) {
            // api logic
            // Se quiser paginação:
            // $movies = Movie::paginate(5);
            return MovieResource::collection($movies);

            // Provando que o role é visível, porém é melhor num middleware
            // return response()->json([
            //     'ROLE' => $data
            // ]);
        } else {
            // web logic
            return view('movieslist', compact('movies'));
        }
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {

    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->name = $request->input('name');
        $movie->part = $request->input('part');
        $movie->image_url = $request->input('image_url');
        $movie->year = $request->input('year');
        $movie->stats = $request->input('stats');
        $movie->details = $request->input('details');
        $movie->genre_id = $request->input('genre_id');
        $movie->url = $request->input('url');

        if($movie -> save()) {
            if($request->is('api/*')) {
                return new MovieResource($movie);
            } else {
                return redirect('/movie');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return new MovieResource($movie);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($request->id);
        $movie->name = $request->input('name');
        $movie->part = $request->input('part');
        $movie->image_url = $request->input('image_url');
        $movie->year = $request->input('year');
        $movie->stats = $request->input('stats');
        $movie->details = $request->input('details');
        $movie->genre_id = $request->input('genre_id');
        $movie->url = $request->input('url');

        if($movie -> save()) {
            return new MovieResource($movie);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        if($movie -> delete()) {
            return new MovieResource($movie);
        }
    }
}
