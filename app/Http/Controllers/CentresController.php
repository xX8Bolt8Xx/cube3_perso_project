<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centres;
use Illuminate\Routing\Controller; // ✅ Bon import

class CentresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $centres = Centres::latest()->paginate(10);
        return view('centres.index', compact('centres'));
    }

    public function create()
    {
        return view('centres.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image_file' => 'image|max:2048',
            'image_url' => 'nullable|url',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'description' => 'nullable|string',
        ]);

        if($request->hasFile('image_file')) {
            $data['image'] = $request->file('image_file')->store('centres', 'public');
        } elseif ($request->filled('image_url')) {
            $data['image'] = $data['image_url'];
        }

        Centres::create($data);
        return redirect()->route('centres.index')->with('success','Centre créé');
    }

    public function show(Centres $centre)
    {
        return view('centres.show', compact('centre'));
    }

    public function edit(Centres $centre)
    {
        return view('centres.edit', compact('centre'));
    }

    public function update(Request $request, Centres $centre)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image_file' => 'nullable|image|max:2048',
            'image_url' => 'nullable|url',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'description' => 'nullable|string',
        ]);

        if($request->hasFile('image_file')) {
            $data['image'] = $request->file('image_file')->store('centres', 'public');
        } elseif ($request->filled('image_url')) {
            $data['image'] = $data['image_url'];
        }

        $centre->update($data);
        return redirect()->route('centres.index')->with('success','Centre modifié');
    }

    public function destroy(Centres $centre)
    {
        $centre->delete();
        return redirect()->route('centres.index')->with('success','Centre supprimé');
    }
}

