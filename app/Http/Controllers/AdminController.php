<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\genre;
use App\Models\product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $product = product::all();
        return view('Admin.index',compact('product'));
    }

    public function create(){
        $genre = genre::all();
        return view('Admin.create' , compact('genre'));
    }

    public function store(Request $request){
        $product = new product();
        $product->save();
        return redirect()->route('Admin.index');
    }

    public function edit($id){
        $product = product::findOrFail($id);
        $categories = genre::all();
        return view('Admin.update',compact('product','categories'));
    }

    public function update(Request $request , $id){
        $product = product::findOrFail($id);
        $product->save();
        return redirect()->route('admin.index');
    }

    public function destroy($id){
        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('success','Product deleted successfully');
    }

    public function login(Request $request){
        $admin = admin::all();
    }

    public function logout(){
        if(Session::has('name')){
            Session::pull('name');
            Session::pull('full_name');
            return redirect('login');
        }
    }
}
