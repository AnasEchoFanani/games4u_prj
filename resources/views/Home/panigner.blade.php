@extends('Layouts.app_Principale')
@section('panier','active')
@section('content')
<div class="container mt-5 pt-5">
    <div class="card text-white p-3 mt-2 text-center">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-3">Game Name</div>
            <div class="col-3">Price Of The Game</div>
            <div class="col-3">Confirmation Status</div>
            <div class="col-3">Image</div>
        </div>
    </div>
    @foreach($panier as $p)
    <div class="card text-white p-3 mt-2 text-center">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-3">{{$p->game_name}}</div>
            <div class="col-3">{{$p->price_game}} DH</div>
            <div class="col-3">
                @if($p->confirme === 0)
                    <span class="text-danger">Not Buy</span>
                @endif
            </div>
            <div class="col-3"><img src="/Folder_img/{{$p->photo_2}}" alt="Folder_img/{{$p->photo_2}}" height="100px" width="200px"></div>
        </div>
    </div>
    @endforeach
</div>


@endsection