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
                            <label for="NMproduit" class="form-label">Game Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="game name" name="game_name" id="game_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="DSproduit" class="form-label">Info Game <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="info_game" name="info_game" rows="4" cols="50" placeholder="info game" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="PRXproduit" class="form-label">Prix DH <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="Prix DH" id="price_game" name="price_game" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="QTproduit" class="form-label">Disponibiliter <span class="text-danger">*</span></label>
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
                            <label for="CATpoduit" class="form-label">Categorie <span class="text-danger">*</span></label>
                            <select class="form-select" name="categorie" id="categorie" required>
                                <option selected disabled value="">Select a Category</option>
                                @foreach($genre as $Categoriess)
                                <option value="{{$Categoriess->nom}}">{{$Categoriess->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row mb-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="photo" class="form-label">Photo</label>
                                        <input class="form-control" type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png,.webp" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="photo1" class="form-label">Photo 1</label>
                                        <input class="form-control" type="file" id="photo1" name="photo1" accept=".jpg,.jpeg,.png,.webp">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="photo2" class="form-label">Photo 2</label>
                                        <input class="form-control" type="file" id="photo2" name="photo2" accept=".jpg,.jpeg,.png,.webp">
                                    </div>
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