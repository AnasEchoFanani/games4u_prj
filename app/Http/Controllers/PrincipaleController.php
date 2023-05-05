<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class PrincipaleController extends Controller
{
    public function index()
    {
        $product_genre_action = product::where('genre','action')->orderBy('created_at', 'desc')->paginate(3);
        $product_genre_sport = product::where('genre','sport')->orderBy('created_at', 'desc')->paginate(3);
        $product = product::orderBy('created_at', 'desc')->paginate(4);
        return view('Home.index', compact('product','product_genre_action','product_genre_sport'));
    }
}
