@extends('layouts.app')
@section('title', 'Show Games')
@section('style-active-home', 'border-bottom')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered table-dark">
                                <thead class="text-center ">
                                    <tr>
                                        <th scope="col">game_name</th>
                                        <th scope="col">price_game</th>
                                        <th scope="col">disponibiliter</th>
                                        <th scope="col">categorie</th>
                                        <th scope="col">Modifier / Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center align-middle">
                                    @foreach($product as $produits)
                                    <tr>
                                        <td data-searchable="{{$produits->game_name}}">{{$produits->game_name}}</td>
                                        <td>{{$produits->price_game}} DH</td>
                                        <td>{{$produits->disponibiliter}}</td>
                                        <td data-searchable="{{$produits->genre}}">{{$produits->genre}}</td>
                                        <td>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">

                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i></button>

                                                </li> / &nbsp;
                                                <li class="list-inline-item">

                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection