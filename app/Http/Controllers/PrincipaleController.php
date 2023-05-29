<?php

namespace App\Http\Controllers;

use App\Models\product;

class PrincipaleController extends Controller
{
    public function index()
    {
        $product_genre_action = product::where('genre', 'action')->orderBy('created_at', 'desc')->paginate(4);
        $product_genre_sport = product::where('genre', 'sport')->orderBy('created_at', 'desc')->paginate(4);
        $product = product::orderBy('created_at', 'desc')->paginate(4);
        return view('Home.index', compact('product', 'product_genre_action', 'product_genre_sport'));
    }

    public function afficher($id)
    {
        $product_id = product::findOrFail($id);
        $user = 
        $same = product::where('genre', $product_id->genre)->inRandomOrder()->paginate(6);
        return view('Home.buy_produit', compact('product_id', 'same'));
    }
}
