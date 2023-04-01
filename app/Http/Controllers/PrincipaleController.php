<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipaleController extends Controller
{
    public function index(){
        return view('Principale.index',compact('product'));
    }
}
