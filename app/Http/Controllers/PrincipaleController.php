<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class PrincipaleController extends Controller
{
    public function index()
    {
        $product = product::orderBy('created_at', 'desc')->paginate(3);
        return view('Home.index', compact('product'));
    }
}
