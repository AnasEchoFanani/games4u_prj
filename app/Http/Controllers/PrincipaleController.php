<?php

namespace App\Http\Controllers;

use App\Models\panier;
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
        $same = product::where('genre', $product_id->genre)->inRandomOrder()->paginate(6);
        return view('Home.buy_produit', compact('product_id', 'same'));
    }

    public function afficher_pagnier()
    {
        $panier = panier::join('products', 'paniers.id_game', '=', 'products.id')
            ->where('paniers.id_user', session()->get('user_id'))
            ->where('paniers.confirme', false)
            ->select('paniers.*', 'products.*')
            ->get();

        return view('Home.panigner', compact('panier'));
    }


    public function panier($id)
    {
        $product = product::findOrFail($id);
        $product_save = new panier;
        $product_save->id_game = $product->id;
        $product_save->id_user = session()->get('user_id');
        $product_save->confirme = false;
        $product_save->save();
        return redirect('/panier/afficher');
    }
}
