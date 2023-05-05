@extends('Layouts.app_Principale')
@section('content')
<div class="container-fluid mt-5 pt-5">
    <div class="row">
        <div class="col ms-3">
            <h1>{{$product_id->game_name}}</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <video src="images_site/1234.mp4" type="video/*" class="d-block w-100" alt="..." controls autoplay muted>
                        </video>
                    </div>
                    <div class="carousel-item">
                        <img src="Folder_img/1681142854.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Folder_img/1681142854.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2">
            <div class="short-div">
                <a type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-current="true" aria-label="Slide 1">
                    <img class="d-block w-100 radius" src="Folder_img/1681142854.jpg" class="img-fluid" />
                </a>
            </div>
            <div class="short-div">
                <a type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-current="true" aria-label="Slide 1">
                    <img class="d-block w-100 radius" src="Folder_img/1681142854.jpg" class="img-fluid" />
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2">
            <div class="short-div">
                <a type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">
                    <video src="images_site/1234.mp4" type="video/*" class="d-block w-100 radius" alt="...">
                    </video>
                </a>
            </div>
            <div class="short-div">
                <a type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-current="true" aria-label="Slide 1">
                    <img class="d-block w-100 radius" src="Folder_img/1681142854.jpg" class="img-fluid" />
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-white">Description</h1>
                    <hr class="text-white">
                    <p class="card-text text-white">Revivez l'histoire épique des neuf films de 
                    la saga Skywalker dans ce jeu incomparable. Avec
                     plus de 300 personnages jouables, plus de 100 
                     véhicules et 23 planètes à explorer, cette galaxie 
                     lointaine, très lointaine, n'a jamais été aussi amusante
                      ! Personnage Obi-Wan Kenobi classique inclus</p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <h2>Buy This Game</h2>
            <hr>
        </div>
    </div>
</div>

@endsection