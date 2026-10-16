<?php

namespace App\Http\Controllers;

use App\Models\Trader;
use App\Http\Requests\StoreTraderRequest;
use App\Http\Requests\UpdateTraderRequest;
use Laravel\Mcp\Request;

class TraderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Trader::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Trader::create($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTraderRequest $request)
    {
        Trader::create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trader $trader)
    {
        return Trader::find($trader);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trader $trader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Trader::find($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trader $trader)
    {
        Trader::find($trader)->delete();
    }
}
