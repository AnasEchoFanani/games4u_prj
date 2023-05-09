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
                                        <th scope="col">Photo</th>
                                        <th scope="col">game_name</th>
                                        <th scope="col">price_game</th>
                                        <th scope="col">disponibiliter</th>
                                        <th scope="col">genre</th>
                                        <th scope="col">Modifier / Supprimer</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center align-middle">
                                    @foreach($product as $produits)
                                        <tr>
                                            <td style="height: 50%;width: 20%;"><img
                                                    src="Folder_img/{{$produits->photo_1}}" alt="{{$produits->photo_1}}"
                                                    height="100%" width="100%"></td>
                                            <td data-searchable="{{$produits->game_name}}">{{$produits->game_name}}</td>
                                            <td>{{$produits->price_game}} DH</td>
                                            <td>{{$produits->disponibiliter}}</td>
                                            <td data-searchable="{{$produits->genre}}">{{$produits->genre}}</td>
                                            <td>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <form action="{{ route('admin.edit' , $produits->id ) }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-primary"><i
                                                                    class="fa fa-edit"></i></button>
                                                        </form>
                                                    </li>
                                                    / &nbsp;
                                                    <li class="list-inline-item">
                                                        <form action="{{ route('admin.destroy', $produits->id) }}"
                                                              method="POST">
                                                            @csrf
                                                            {{ method_field('DELETE') }}
                                                            <button type="submit" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </form>
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
