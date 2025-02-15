<?php

namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return response()->json(Game::with('characters')->paginate(5));
        return Game::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
        ]);

        $game = Game::create($fields);

        return $game;
    }

    /**
     * Display the specified resource.
     */
    public function show(game $game)
    {
        return $game;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, game $game)
    {
        $fields = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
        ]);

        $game ->update(attributes: $fields);

        return $game;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(game $game)
    {
        $game->delete();
        return [ 'message' =>'The game was deleted '];
    }
}
