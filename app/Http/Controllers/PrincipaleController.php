<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\panier;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PrincipaleController extends Controller
{
    public function index()
    {
        if (Session()->has('user_id')) {
            $user = User::findOrFail(session()->get('user_id'));
            $product_genre_action = product::where('genre', 'action')->orderBy('created_at', 'desc')->paginate(4);
            $product_genre_sport = product::where('genre', 'sport')->orderBy('created_at', 'desc')->paginate(4);
            $product = product::orderBy('created_at', 'desc')->paginate(4);
            return view('Home.index', compact('product', 'product_genre_action', 'product_genre_sport', 'user'));
        } else {
            $product_genre_action = product::where('genre', 'action')->orderBy('created_at', 'desc')->paginate(4);
            $product_genre_sport = product::where('genre', 'sport')->orderBy('created_at', 'desc')->paginate(4);
            $product = product::orderBy('created_at', 'desc')->paginate(4);
            return view('Home.index', compact('product', 'product_genre_action', 'product_genre_sport'));
        }
    }

    public function afficher($id)
    {
        if (Session()->has('user_id')) {
            $user = User::findOrFail(session()->get('user_id'));
            $product_id = product::findOrFail($id);
            $same = product::where('genre', $product_id->genre)->inRandomOrder()->paginate(6);
            return view('Home.buy_produit', compact('product_id', 'same', 'user'));
        } else {
            $product_id = product::findOrFail($id);
            $same = product::where('genre', $product_id->genre)->inRandomOrder()->paginate(6);
            return view('Home.buy_produit', compact('product_id', 'same'));
        }
    }

    public function afficher_pagnier()
    {
        if (Session()->has('user_id')) {
            $user = User::findOrFail(session()->get('user_id'));
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
        return view('Home.panigner', compact('panier', 'user'));
        }else{
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

    public function buy()
    {
        $user = User::findOrFail(session()->get('user_id'));

        return view('Home.buy', compact('user'));
    }

    public function buy_confirmation(Request $request)
    {

        $panier = Panier::findOrFail(session()->get('user_id'));
        $panier->confirme = true;
        $panier->save();

        $totalPrice = 0;
        $maxNumcom = Commande::max('numcom');

        foreach ($panier as $item) {
            $product = Product::findOrFail($item->id_game);
            $totalPrice += $product->prix;

            $commande = new Commande;

            if ($maxNumcom === null) {
                $maxNumcom = 1;
                $commande->numcom = $maxNumcom;
            } else {
                $maxNumcom++;
                $commande->numcom = $maxNumcom;
            }

            $commande->product_id = $item->id_game;
            $commande->client_id = session()->get('user_id');
            $commande->mode_paiment = 'cart';
            $commande->total_pro = $totalPrice;
            $commande->save();
        }

        return redirect('/');
    }

    public function profile()
    {
        $user = User::findOrFail(session()->get('user_id'));
        return view('Home.profile', compact('user'));
    }

    public function profile_store(Request $request)
    {
        $user = User::findOrFail(session()->get('user_id'));
        if (Hash::check($request->old_password, $user->password)) {
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = $request->new_password;
            if ($request->hasFile('profile')) {
                $file_extension = $request->profile->getClientOriginalExtension();
                sleep(0.1);
                $file_name = time() . '.' . $file_extension;
                $path = 'Folder_img';
                $photoo = $request->profile->move($path, $file_name);
                $user->Photo = $file_name;
            }
            return redirect("/");
        };
        return redirect('/');
    }
}
