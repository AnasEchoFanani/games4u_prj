<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\Commande;
use App\Models\genre;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function index()
    {
        $product = product::all();
        return view('Admin.index', compact('product'));
    }


    public function createGenre()
    {
        $genre = genre::all();
        return view('Admin.createGenre', compact('genre'));
    }

    public function storeGenre(Request $request)
    {
        $genre = new genre;

        $genre->genre = $request->genre;

        $genre->save();
        return redirect()->route('createGenre');
    }

    public function destroyGenre($id)
    {
        $genre = genre::findOrFail($id);
        $genre->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }


    public function create()
    {
        $genre = genre::all();
        return view('Admin.create', compact('genre'));
    }

    public function show($id)
    {
        $comande = Commande::select()->where('numcom', $id)->get();
        return view('admin.details', compact('comande'));
    }

    public function commande()
    {

        $c = Commande::all();
        return view('Admin.commande', compact('c'));

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
            sleep(0.5);
            $file_name_3 = time() . '.' . $file_extension_3;
            $path = 'Folder_img';
            $photoo = $request->photo_3->move($path, $file_name_3);
            $product->photo_3 = $file_name_3;
        }
        if ($request->hasFile('photo_4')) {
            $file_extension_4 = $request->photo_4->getClientOriginalExtension();
            sleep(1);
            $file_name_4 = time() . '.' . $file_extension_4;
            $path = 'Folder_img';
            $photoo = $request->photo_4->move($path, $file_name_4);
            $product->photo_4 = $file_name_4;
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
        $product->Espace_disque_min = $request->Espace_disque_min;

        $product->Système_dexploitation_max = $request->Système_dexploitation_max;
        $product->Processeur_max = $request->Processeur_max;
        $product->Mémoire_vive_max = $request->Mémoire_vive_max;
        $product->Graphiques_max = $request->Graphiques_max;
        $product->DirectX_max = $request->DirectX_max;
        $product->Espace_disque_max = $request->Espace_disque_max;

        $product->save();
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $product = product::select()->where('id', $id)->get();
        $genre = genre::all();
        return view('Admin.update', compact('product', 'genre'));
    }

    public function update(Request $request, $id)
    {
        $product = product::select()->where('id', $id)->first();


        if ($request->hasFile('video')) {
            $file_extension_video = $request->video->getClientOriginalExtension();
            sleep(0.1);
            $file_name_video = time() . '.' . $file_extension_video;
            $path = 'Folder_img';
            $request->video->move($path, $file_name_video);
            $product->video = $file_name_video;
        } else {
            $product->video = $product->video;
        }

        if ($request->hasFile('photo_1')) {
            $file_extension_1 = $request->photo_1->getClientOriginalExtension();
            sleep(0.2);
            $file_name_1 = time() . '.' . $file_extension_1;
            $path = 'Folder_img';
            $request->photo_1->move($path, $file_name_1);
            $product->photo_1 = $file_name_1;
        } else {
            $product->photo_1 = $product->photo_1;
        }

        if ($request->hasFile('photo_2')) {
            $file_extension_2 = $request->photo_2->getClientOriginalExtension();
            sleep(0.3);
            $file_name_2 = time() . '.' . $file_extension_2;
            $path = 'Folder_img';
            $request->photo_2->move($path, $file_name_2);
            $product->photo_2 = $file_name_2;
        } else {
            $product->photo_2 = $product->photo_2;
        }

        if ($request->hasFile('photo_3')) {
            $file_extension_3 = $request->photo_3->getClientOriginalExtension();
            sleep(0.5);
            $file_name_3 = time() . '.' . $file_extension_3;
            $path = 'Folder_img';
            $photoo = $request->photo_3->move($path, $file_name_3);
            $product->photo_3 = $file_name_3;
        } else {
            $product->photo_3 = $product->photo_3;
        }

        if ($request->hasFile('photo_4')) {
            $file_extension_4 = $request->photo_4->getClientOriginalExtension();
            sleep(1);
            $file_name_4 = time() . '.' . $file_extension_4;
            $path = 'Folder_img';
            $photoo = $request->photo_4->move($path, $file_name_4);
            $product->photo_4 = $file_name_4;
        } else {
            $product->photo_4 = $product->photo_4;
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
        $product->Espace_disque_min = $request->Espace_disque_min;

        $product->Système_dexploitation_max = $request->Système_dexploitation_max;
        $product->Processeur_max = $request->Processeur_max;
        $product->Mémoire_vive_max = $request->Mémoire_vive_max;
        $product->Graphiques_max = $request->Graphiques_max;
        $product->DirectX_max = $request->DirectX_max;
        $product->Espace_disque_max = $request->Espace_disque_max;

        $product->save();
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $product = product::findOrFail($id);
        
        if ($product->video) {
            $file_path_video = public_path('Folder_img/' . $product->video);
            if (file_exists($file_path_video)) {
                unlink($file_path_video);
            }
        }
        // delete existing photo_1 file if it exists
        if ($product->photo_1) {
            $file_path_photo_1 = public_path('Folder_img/' . $product->photo_1);
            if (file_exists($file_path_photo_1)) {
                unlink($file_path_photo_1);
            }
        }
        // delete existing photo_2 file if it exists
        if ($product->photo_2) {
            $file_path_2 = public_path('Folder_img/' . $product->photo_2);
            if (file_exists($file_path_2)) {
                unlink($file_path_2);
            }
        }
        // delete existing photo_3 file if it exists
        if ($product->photo_3) {
            $file_path_3 = public_path('Folder_img/' . $product->photo_3);
            if (file_exists($file_path_3)) {
                unlink($file_path_3);
            }
        }
        if ($product->photo_4) {
            $file_path_3 = public_path('Folder_img/' . $product->photo_4);
            if (file_exists($file_path_3)) {
                unlink($file_path_3);
            }
        }


        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }

    public function logout()
{
        Session::forget('first_name');
    
    return redirect('/');
}

}
