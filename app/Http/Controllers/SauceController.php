<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauce;

class SauceController extends Controller
{
    // Affiche toutes les sauces
    public function index()
    {
        $sauces = Sauce::all();
        return view('sauces.index', compact('sauces'));
    }

    // Affiche le formulaire de création d'une sauce
    public function create()
    {
        return view('sauces.create');
    }

    // Stocke une nouvelle sauce en base
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'manufacturer' => 'required|max:100',
            'description' => 'required',
            'mainPepper' => 'required|max:50',
            'imageUrl' => 'required|url',
            'heat' => 'required|integer|min:1|max:10',
        ]);

        Sauce::create($request->all());

        return redirect()->route('sauces.index')->with('success', 'Sauce ajoutée !');
    }

    // Affiche une sauce spécifique
    public function show(Sauce $sauce)
    {
        return view('sauces.show', compact('sauce'));
    }

    // Affiche le formulaire d'édition d'une sauce
    public function edit(Sauce $sauce)
    {
        return view('sauces.edit', compact('sauce'));
    }

    // Met à jour une sauce
    public function update(Request $request, Sauce $sauce)
    {
        $request->validate([
            'name' => 'required|max:100',
            'manufacturer' => 'required|max:100',
            'description' => 'required',
            'mainPepper' => 'required|max:50',
            'imageUrl' => 'required|url',
            'heat' => 'required|integer|min:1|max:10',
        ]);

        $sauce->update($request->all());

        return redirect()->route('sauces.index')->with('success', 'Sauce mise à jour !');
    }

    // Supprime une sauce
    public function destroy(Sauce $sauce)
    {
        $sauce->delete();

        return redirect()->route('sauces.index')->with('success', 'Sauce supprimée !');
    }
}
