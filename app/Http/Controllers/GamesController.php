<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularGames = Game::select([
            'name',
            'first_release_date',
            'rating',
            'aggregated_rating'
        ])
        ->with(['cover' => ['url']])
        ->with(['platforms' => ['name', 'abbreviation']])
        ->whereDate('first_release_date', '>=', now()->subMonths(3)->timestamp)
        ->whereDate('first_release_date', '<', now()->timestamp)
        ->orderBy('aggregated_rating')
        ->limit(12)
        ->get();

        $recentlyReviewed = Game::select([
            'name',
            'first_release_date',
            'rating',
            'aggregated_rating',
            'summary'
        ])
        ->with(['cover' => ['url']])
        ->with(['platforms' => ['name', 'abbreviation']])
        ->whereDate('first_release_date', '>=', now()->subMonths(3)->timestamp)
        ->whereDate('first_release_date', '<', now()->timestamp)
        ->where('rating_count', '>', 5)
        ->orderBy('aggregated_rating')
        ->limit(3)
        ->get();

        return view('pages.index', compact('popularGames', 'recentlyReviewed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
