<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();

        // Passe les items à la vue "browser"
        return view('browser', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Item::all();
        return view('sell', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string',
            'end_time' => 'string|date',
            'price' => 'required|numeric',
            'image' => 'required|string', // Validation pour l'image
        ]);

        // Enregistrement de l'image
//        $imagePath = $request->file('image')->store('images', 'public'); // Stocker l'image dans le dossier public/images

        // Créer l'item et l'enregistrer dans la base de données
        $item = Item::create([
            'name' => $request->name,
            'end_time' => $request->end_time,
            'price' => $request->price,
            'image' => $request->image, // Chemin de l'image
        ]);

        // Redirection vers la page index des items avec un message de succès
        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id); // Trouver l'item par son ID
        return view('edit', compact('item')); // Passer l'item à la vue
    }

    public function update(Request $request, $id)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|string', // On traite simplement l'image comme une chaîne de caractères
            'end_time' => 'required|date',
        ]);

        // Trouver l'item
        $item = Item::findOrFail($id);

        // Mise à jour des données
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->end_time = $request->input('end_time');

        // Si une nouvelle image est fournie, la mettre à jour
        if ($request->filled('image')) {
            $item->image = $request->input('image'); // Mettre à jour l'URL de l'image
        }

        // Sauvegarder les modifications
        $item->save();

        // Redirection après mise à jour
        return redirect()->route('items.show', $item->id)->with('success', 'Item mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
