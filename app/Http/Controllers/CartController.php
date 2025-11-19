<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
// use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id)
    {
        $product = Product::findOrFail($id);

        Cart::add([
           'id' => $product->id,
           'name' => $product->name,
           'price' => $product->price,
           'quantity' => 1,
           'attributes' => [],
           'associatedModel' => $product 
        ]);

        return back()->with('success', 'Dodano u košaricu!');

    }

    public function index()
    {
        $items = Cart::getContent();
        $total = Cart::getTotal();

        return view('cart.index', compact('items', 'total'));
    }
}
