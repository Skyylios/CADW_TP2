<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;

class FaitController extends Controller
{

    public function accueil()
    {
        return view('accueil', [
            "fait" => Fait::inRandomOrder()->first()
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('faits.index', [
            "faits" => Fait::orderBy('id')
                ->get()
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
