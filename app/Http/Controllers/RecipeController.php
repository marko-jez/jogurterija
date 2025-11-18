<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $validated['user_id'] = auth()->id();

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

        if ($recipe->user_id !== auth()->id()) {
            abort(403, 'Nemaš dopuštenje.');
        }

        if($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('recipes', 'public');
        }

        $validated['slug'] = Str::slug($validated['title']);

        $recipe->update($validated);

        return redirect()->route('recipes.show', $recipe->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $recipe = Recipe::findOrFail($id);

    if ($recipe->user_id !== auth()->id()) {
        abort(403);
    }

    $recipe->delete();
    return redirect()->route('recipes.index');
}
}
