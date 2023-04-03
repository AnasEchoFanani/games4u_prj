<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\genre;
use App\Models\product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $product = product::all();
        return view('Admin.index', compact('product'));
    }

    public function create()
    {
        $genre = genre::all();
        return view('Admin.create', compact('genre'));
    }

    public function store(Request $request)
    {
        $product = new product();


        if ($request->hasFile('video')) {
            $file_extension_video = $request->video->getClientOriginalExtension();
            sleep(0.1);
            $file_name_video = time() . '.' . $file_extension_video;
            $path = 'Folder_img';
            $request->video->move($path, $file_name_video);
            $product->video = $file_name_video;
        }

        if ($request->hasFile('photo_1')) {
            $file_extension_1 = $request->photo_1->getClientOriginalExtension();
            sleep(0.2);
            $file_name_1 = time() . '.' . $file_extension_1;
            $path = 'Folder_img';
            $request->photo_1->move($path, $file_name_1);
            $product->photo_1 = $file_name_1;
        }

        if ($request->hasFile('photo_2')) {
            $file_extension_2 = $request->photo_2->getClientOriginalExtension();
            sleep(0.3);
            $file_name_2 = time() . '.' . $file_extension_2;
            $path = 'Folder_img';
            $request->photo_2->move($path, $file_name_2);
            $product->photo_2 = $file_name_2;
        }

        if ($request->hasFile('photo_3')) {
            $file_extension_3 = $request->photo_3->getClientOriginalExtension();
            sleep(0.4);
            $file_name_3 = time() . '.' . $file_extension_3;
            $path = 'Folder_img';
            $photoo = $request->photo_3->move($path, $file_name_3);
            $product->photo_3 = $file_name_3;
        }


        $product->game_name = $request->game_name;
        $product->info_game = $request->info_game;
        $product->price_game = $request->price_game;
        $product->disponibiliter = $request->disponibiliter;
        $product->date = $request->date;
        $product->genre = $request->genre;
        $product->type = $request->type;
        $product->devices = $request->devices;


        $product->Système_dexploitation_min = $request->Système_dexploitation_min;
        $product->Processeur_min = $request->Processeur_min;
        $product->Mémoire_vive_min = $request->Mémoire_vive_min;
        $product->Graphiques_min = $request->Graphiques_min;
        $product->DirectX_min = $request->DirectX_min;
        $product->Réseau_min = $request->Réseau_min;
        $product->Espace_disque_min = $request->Espace_disque_min;

        $product->Système_dexploitation_max = $request->Système_dexploitation_max;
        $product->Processeur_max = $request->Processeur_max;
        $product->Mémoire_vive_max = $request->Mémoire_vive_max;
        $product->Graphiques_max = $request->Graphiques_max;
        $product->DirectX_max = $request->DirectX_max;
        $product->Réseau_max = $request->Réseau_max;
        $product->Espace_disque_max = $request->Espace_disque_max;

        $product->save();
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $product = product::findOrFail($id);
        $categories = genre::all();
        return view('Admin.update', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = product::findOrFail($id);
        $product->save();
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $product = product::findOrFail($id);
            // delete existing photo_3 file if it exists
            if ($product->photo_1) {
                $file_path = public_path('Folder_img/' . $product->photo_1);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }
            // delete existing photo_3 file if it exists
            if ($product->photo_2) {
                $file_path = public_path('Folder_img/' . $product->photo_2);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }
            // delete existing photo_3 file if it exists
            if ($product->photo_3) {
                $file_path = public_path('Folder_img/' . $product->photo_3);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }



        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }

    public function login(Request $request)
    {
        $admin = admin::all();
    }

    public function logout()
    {
        if (Session::has('name')) {
            Session::pull('name');
            Session::pull('full_name');
            return redirect('login');
        }
    }
}
