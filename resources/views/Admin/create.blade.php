@extends('layouts.app')
@section('title', 'Create Game')
@section('style-active-add', 'border-bottom')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card p-4 bg-dark text-white border border-white">
                        <h2 class="text-center mb-4">Create Product</h2>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="NMproduit" class="form-label">Game Name <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="game name" name="game_name"
                                       id="game_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="DSproduit" class="form-label">Info Game <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="info_game" name="info_game" rows="4" cols="50"
                                          placeholder="info game" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="PRXproduit" class="form-label">Prix DH <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Prix DH" id="price_game"
                                       name="price_game" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="QTproduit" class="form-label">Disponibiliter <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="disponibiliter" id="disponibiliter" required>
                                    <option selected disabled value="">Select la Disponibiliter</option>
                                    <option>Oui</option>
                                    <option>Non</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="COLproduit" class="form-label">date</label>
                                <input class="form-control" type="date" id="date" name="date">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="genre" class="form-label">genre <span class="text-danger">*</span></label>
                                <select class="form-select text-black" name="genre" id="genre">
                                    <option selected disabled value="">Select a genre</option>
                                    @foreach($genre as $Categoriess)
                                        <option value="{{$Categoriess->genre}}">{{$Categoriess->genre}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="devices" class="form-label">devices <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="devices" id="devices">
                                    <option value="">select devices</option>
                                    <option value="windows">windows</option>
                                    <option value="apple">apple</option>
                                    <option value="play">play</option>
                                    <option value="xbox">xbox</option>
                                    <option value="pc">pc</option>
                                    <option value="console">console</option>
                                    <option value="all">all</option>
                                </select></div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="type" class="form-label">type</label>
                                    <input class="form-control" type="text" id="type" name="type" required>
                                </div>
                            </div>


                        </div>
                        <div class="row mb-3">
                            <div class="row mb-3">
                                <div class="row ms-lg-5">

                                    <div class="card col-md-5 ms-lg-5 bg-dark text-white border-white">
                                        <div class="card-header">Configue Minimale</div>
                                        <div class="card-body">

                                            <div>
                                                <div class="mb-3">
                                                    <label for="Système_dexploitation_min" class="form-label">Système
                                                        dexploitation min</label>
                                                    <input class="form-control" type="text"
                                                           id="Système_dexploitation_min"
                                                           name="Système_dexploitation_min" required>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="Processeur_min" class="form-label">Processeur
                                                        min</label>
                                                    <input class="form-control" type="text" id="Processeur_min"
                                                           name="Processeur_min" required>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="Mémoire_vive_min"
                                                           class="form-label">Mémoire_vive_min</label>
                                                    <input class="form-control" type="text" id="Mémoire_vive_min"
                                                           name="Mémoire_vive_min" required>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="Graphiques_min"
                                                           class="form-label">Graphiques_min</label>
                                                    <input class="form-control" type="text" id="Graphiques_min"
                                                           name="Graphiques_min" required>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="DirectX_min" class="form-label">DirectX_min</label>
                                                    <input class="form-control" type="text" id="DirectX_min"
                                                           name="DirectX_min" required>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="Espace_disque_min"
                                                           class="form-label">Espace_disque_min</label>
                                                    <input class="form-control" type="text" id="Espace_disque_min"
                                                           name="Espace_disque_min" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    &nbsp; &nbsp;

                                    <div class="card col-md-5  bg-dark text-white border-white">
                                        <div class="card-header">Configue Maximale</div>
                                        <div class="card-body">

                                            <div>
                                                <div class="mb-3">
                                                    <label for="Système_dexploitation_max" class="form-label">Système_dexploitation_max</label>
                                                    <input class="form-control" type="text"
                                                           id="Système_dexploitation_max"
                                                           name="Système_dexploitation_max" required>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="Processeur_max"
                                                           class="form-label">Processeur_max</label>
                                                    <input class="form-control" type="text" id="Processeur_max"
                                                           name="Processeur_max" required>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="Mémoire_vive_max"
                                                           class="form-label">Mémoire_vive_max</label>
                                                    <input class="form-control" type="text" id="Mémoire_vive_max"
                                                           name="Mémoire_vive_max" required>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="Graphiques_max"
                                                           class="form-label">Graphiques_max</label>
                                                    <input class="form-control" type="text" id="Graphiques_max"
                                                           name="Graphiques_max" required>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="DirectX_max" class="form-label">DirectX_max</label>
                                                    <input class="form-control" type="text" id="DirectX_max"
                                                           name="DirectX_max" required>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-3">
                                                    <label for="Espace_disque_max"
                                                           class="form-label">Espace_disque_max</label>
                                                    <input class="form-control" type="text" id="Espace_disque_max"
                                                           name="Espace_disque_max" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="row mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="photo_1" class="form-label">Photo 1</label>
                                                <input class="form-control" type="file" id="photo_1" name="photo_1"
                                                       accept="image/*" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="photo_2" class="form-label">Photo 2</label>
                                                <input class="form-control" type="file" id="photo_2" name="photo_2"
                                                       accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="photo_3" class="form-label">Photo 3</label>
                                                <input class="form-control" type="file" id="photo_3" name="photo_3"
                                                       accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="photo_3" class="form-label">Photo 4</label>
                                                <input class="form-control" type="file" id="photo_4" name="photo_4"
                                                       accept="image/*">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="row mb-3">
                                        <div class="row ms-1">

                                            <label for="video" class="form-label"> video</label>
                                            <input class="form-control" type="file" id="video" name="video"
                                                   accept="video/*">
                                            <br>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <button type="submit" class="btn btn-primary">Ajouter Produit</button>

                            </div>
                </form>
            </div>
        </div>
    </div>
@endsection
