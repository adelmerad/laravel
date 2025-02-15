<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Character::paginate(5));
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
            'name'=> 'required|string',
            'class'=> 'required|string',
            'level'=> 'integer|min:1',
            'game_id'=> 'required|exists:games,id'    
        ]);
        $character = Character::create($fields);

        return $character;
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return $character;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {
        $fields = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
        ]);

        $character->update(attributes: $fields);

        return $character;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return [ 'message' =>'The post was deleted '];
    }
}
