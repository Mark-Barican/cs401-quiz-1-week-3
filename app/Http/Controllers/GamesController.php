<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = Game::find($id);
        
        if (!$game) {
            abort(404, 'Game not found');
        }
        
        return view('games.show', ['game' => $game]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::find($id);
        
        if (!$game) {
            return response()->json([
                'message' => 'Game not found.',
                'content' => []
            ], 404);
        }
        
        $game->delete();
        
        $remainingGames = Game::all();
        
        return response()->json([
            'message' => 'Record Successfully Deleted.',
            'content' => $remainingGames
        ], 200);
    }
}
