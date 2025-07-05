<?php

namespace App\Http\Controllers;

use App\Models\centres;
use App\Http\Requests\StorecentresRequest;
use App\Http\Requests\UpdatecentresRequest;

class CentresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $centres = Centre::all();
        return view('createcentre', compact('centres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'description' => 'required|string|max:255',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('centres', 'public');
        }

        Centres::create([
            'name' => $request->name,
            'image' => $path,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Centre ajouté !');
    }

    /**
     * Display the specified resource.
     */
    public function show(centres $centres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(centres $centres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecentresRequest $request, centres $centres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(centres $centres)
    {
        //
    }
}
