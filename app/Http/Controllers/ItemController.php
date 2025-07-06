<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // ✅ Bon import

class ItemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

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
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'end_time' => 'required|date|after:now',


            // L'un des deux est requis :
            'image_file' => 'required_without:image_url|nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'image_url'  => 'required_without:image_file|nullable|url',
        ], [
            'image_file.required_without' => 'Vous devez fournir une image ou une URL.',
            'image_url.required_without'  => 'Vous devez fournir une image ou une URL.',
        ]);

        // Gestion de l'image
        if ($request->hasFile('image_file')) {
            $imagePath = $request->file('image_file')->store('items', 'public');
        } elseif ($request->filled('image_url')) {
            $imagePath = $request->input('image_url');
        } else {
            $imagePath = null;
        }

        // Création du centre (ou de l’objet)
        Item::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
            'end_time' => $request->end_time, // ✅ AJOUT ICI
        ]);

        return redirect()->route('items.index')->with('success', 'Objet mis en vente avec succès !');
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
    public function home()
    {
        $items = Item::latest()->take(3)->get(); // récupère les 3 derniers objets
        return view('home', compact('items'));
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
