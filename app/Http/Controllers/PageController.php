<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function product()
    {
        return view('product');
    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        if (!$query) {
            return redirect()->back()->with('message', 'Molimo unesite pojam za pretragu.');
        }

        $recipes = Recipe::where('title', 'LIKE', '%' . $query . '%')->get();

        return view('search', compact('query', 'recipes'));
    }

}
