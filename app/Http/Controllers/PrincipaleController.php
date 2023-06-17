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
            ->select(
                'paniers.*',
                'products.game_name',
                'products.info_game',
                'products.video',
                'products.photo_1',
                'products.photo_2',
                'products.photo_3',
                'products.photo_4',
                'products.price_game',
                'products.disponibiliter',
                'products.date',
                'products.genre',
                'products.type',
                'products.Système_dexploitation_min',
                'products.Processeur_min',
                'products.Mémoire_vive_min',
                'products.Graphiques_min',
                'products.DirectX_min',
                'products.Espace_disque_min',
                'products.Système_dexploitation_max',
                'products.Processeur_max',
                'products.Mémoire_vive_max',
                'products.Graphiques_max',
                'products.DirectX_max',
                'products.Espace_disque_max',
                'products.devices'
            )
            ->get();
        return view('Home.panigner', compact('panier'));
    }

    public function delete_panier($id)
    {
        $panier_delete = panier::find($id);
        $panier_delete->delete();
        return redirect()->back();
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
