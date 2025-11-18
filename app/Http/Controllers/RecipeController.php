<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allRecipes = Recipe::all();

        return view('recipes.index', compact('allRecipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required',
            'ingredients' => 'required',
            'steps' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        if($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('recipes', 'public');
        } else {
            $imagePath = null;
        }

        $validated['slug'] = Str::slug($validated['title']);
        $validated['image'] = $imagePath;

        Recipe::create($validated);

        return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe = Recipe::find($id);

        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recipe = Recipe::find($id);

        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required',
            'ingredients' => 'required',
            'steps' => 'required'
        ]);

        $recipe = Recipe::find($id);
        $recipe->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'ingredients' => $validated['ingredients'],
            'steps' => $validated['steps'],
            'slug' => Str::slug($validated['title'])
        ]);

        return redirect()->route('recipes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Recipe::destroy($id);

        return redirect()->route('recipes.index');
    }
}
