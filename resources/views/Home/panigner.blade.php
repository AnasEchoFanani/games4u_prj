@extends('Layouts.app_Principale')

@section('panier', 'active')

@section('content')
@if(Session::has('user_id'))
<div class="container mt-5 pt-5">
    <div class="card text-white p-3 mt-2 text-center">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-2">Game Name</div>
            <div class="col-2">Price Of The Game</div>
            <div class="col-2">Confirmation Status</div>
            <div class="col-4">Image</div>
            <div class="col-1">Action</div>
        </div>
    </div>
    @foreach($panier as $p)
    <div class="card text-white p-3 mt-2 text-center">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-2">{{$p->game_name}}</div>
            <div class="col-2">{{$p->price_game}} DH</div>
            <div class="col-2">
                @if($p->confirme === 0)
                    <span class="text-danger">Not Buy</span>
                @endif
            </div>
            <div class="col-4">
                <img src="/Folder_img/{{$p->photo_2}}" alt="Folder_img/{{$p->photo_2}}" height="100px" width="200px">
            </div>
            <form action="#" method="POST" class="col-1">
                @csrf
                @method('delete')
                <button class="btn btn-trenceparent col-1 text-danger"><i class="fa-solid fa-x"></i></button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@else
<div class="container mt-5 pt-5">
    <div class="card text-center text-white">
        <div class="card-body">
            <h1>Welcome to our Game Shop!</h1>
            <p class="card-text">Join us to unlock a world of amazing games and exclusive deals.</p>
            <a href="/authentication/register" class="btn btn-buy">Create an Account</a>
            <p class="mt-3">Already have an account? <a href="/authentication/login"" class="more-link">Login here</a></p>
        </div>
    </div>
</div>
@endif
@endsection
