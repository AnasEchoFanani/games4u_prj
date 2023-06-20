@extends('Layouts.app_Principale')
@section('home','active')
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
                        <img src="Folder_img/{{$product_id->photo_2}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Folder_img/{{$product_id->photo_3}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Folder_img/{{$product_id->photo_4}}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2">
            <div class="short-div">
                <a type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-current="true" aria-label="Slide 1">
                    <img class="d-block w-100 radius" src="Folder_img/{{$product_id->photo_2}}" class="img-fluid" />
                </a>
            </div>
            <div class="short-div">
                <a type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-current="true" aria-label="Slide 1">
                    <img class="d-block w-100 radius" src="Folder_img/{{$product_id->photo_3}}" class="img-fluid" />
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
                <a type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-current="true" aria-label="Slide 1">
                    <img class="d-block w-100 radius" src="Folder_img/{{$product_id->photo_4}}" class="img-fluid" />
                </a>
            </div>
        </div>
    </div>
    <h1 class="text-white">INFORMATION</h1>
    <hr class="text-white">
    <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-white">Specifications</h1>
                    <hr class="text-white">
                    <div class="row">
                        <div class="col-6 fw-bold text-white">Minimum</div>
                        <div class="col-6 fw-bold text-white">Recommended</div>
                        <br><br><br>
                        <div class="col-6 purple fw-semibold">OS</div>
                        <div class="col-6 purple fw-semibold">OS</div>
                        <br>
                        <div class="col-6 text-white">{{$product_id->Système_dexploitation_min}}</div>
                        <div class="col-6 text-white">{{$product_id->Système_dexploitation_max}}</div>
                        <br><br>
                        <div class="col-6 purple fw-semibold">Processor</div>
                        <div class="col-6 purple fw-semibold">Processor</div>
                        <br>
                        <div class="col-6 text-white">{{$product_id->Processeur_min}}</div>
                        <div class="col-6 text-white">{{$product_id->Processeur_max}}</div>
                        <br><br>
                        <div class="col-6 purple fw-semibold">Memory</div>
                        <div class="col-6 purple fw-semibold">Memory</div>
                        <br>
                        <div class="col-6 text-white">{{$product_id->Mémoire_vive_min}}</div>
                        <div class="col-6 text-white">{{$product_id->Mémoire_vive_max}}</div>
                        <br><br>
                        <div class="col-6 purple fw-semibold">Storage</div>
                        <div class="col-6 purple fw-semibold">Storage</div>
                        <br>
                        <div class="col-6 text-white">{{$product_id->Espace_disque_min}}</div>
                        <div class="col-6 text-white">{{$product_id->Espace_disque_max}}</div>
                        <br><br>
                        <div class="col-6 purple fw-semibold">Direct X</div>
                        <div class="col-6 purple fw-semibold">Direct X</div>
                        <br>
                        <div class="col-6 text-white">{{$product_id->DirectX_min}}</div>
                        <div class="col-6 text-white">{{$product_id->DirectX_max}}</div>
                        <br><br>
                        <div class="col-6 purple fw-semibold">Graphics</div>
                        <div class="col-6 purple fw-semibold">Graphics</div>
                        <br>
                        <div class="col-6 text-white">{{$product_id->Graphiques_min}}</div>
                        <div class="col-6 text-white">{{$product_id->Graphiques_max}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-white">Description</h1>
                    <hr class="text-white">
                    <p class="card-text text-white">{{$product_id->info_game}}</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card text-center">
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <h1 class="text-white">{{$product_id->game_name}}</h1>
                        <hr class="text-white">
                        <form action="#" method="POST">
                            @csrf
                            <button class="btn btn-buy fw-semibold btn-lg" type="button">BUY NOW</button>
                        </form>
                        <form action="/panier/{{$product_id->id}}" method="POST">
                            @csrf
                            <button class="btn btn-add-to-shop fw-semibold btn-lg" type="submit">ADD TO CART</button>
                        </form>
                        <form action="/whish_list/{{$product_id->id}}" method="POST">
                            @csrf
                            <button class="btn btn-add-to-shop fw-bold" type="button"><i class='bx bx-plus-circle'></i>
                                ADD TO WISHLIST
                            </button>
                        </form>
                        <hr class="text-white">
                        <div class="row text-aligne">
                            <div class="col-6 text-white text-start fw-bold">Price</div>
                            @if($product_id->price_game>0)
                            <div class="text-end col-6 price">{{$product_id->price_game}} DH</div>
                            @else
                            <div class="text-end col-6 price">Free</div>
                            @endif
                            <br><br>
                            <div class="col-6 text-white text-start fw-bold">Platform</div>
                            @if($product_id->devices == "windows")
                            <div class="text-end col-6 text-white"><i class='bx bxl-windows'></i></div>
                            @elseif($product_id->devices == "apple")
                            <div class="text-end col-6 text-white"><i class='bx bxl-apple'></i></div>
                            @elseif($product_id->devices == "play")
                            <div class="text-end col-6 text-white"><i class="fa-brands fa-playstation"></i>
                            </div>
                            @elseif($product_id->devices == "xbox")
                            <div class="text-end col-6 text-white"><i class="fa-brands fa-xbox"></i></div>
                            @elseif($product_id->devices == "pc")
                            <div class="text-end col-6 text-white"><i class='bx bxl-apple'></i>&nbsp;<i class='bx bxl-windows'></i></div>
                            @elseif($product_id->devices == "console")
                            <div class="text-end col-6 text-white"><i class="fa-brands fa-playstation"></i>&nbsp;<i class="fa-brands fa-xbox"></i></div>
                            @elseif($product_id->devices == "all")
                            <div class="text-end col-6 text-white">
                                <i class="fa-brands fa-playstation"></i>&nbsp;
                                <i class="fa-brands fa-xbox"></i>&nbsp;
                                <i class='bx bxl-windows'></i>&nbsp;
                                <i class='bx bxl-apple'></i>
                            </div>
                            @endif
                            <br><br>
                            <div class="col-6 text-white text-start fw-bold">Release Date</div>
                            <div class="text-end col-6 text-white">{{$product_id->date}}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <h1>MORE LIKE THIS</h1>
            <hr>
        </div>
    </div>
    <div class="row mt-3">
        @foreach($same as $topProduct)
        <div class="col-2">
            <div class="card">
                <img src="Folder_img/{{$topProduct->photo_1}}" class="card-img-top image-game" alt="Photo_1">
                <div class="card-body">
                    <h6 class="card-title">{{$topProduct->game_name}}</h6>
                    <div class="row">
                        <div class="col text-white">
                            @if($topProduct->devices == "windows")
                            <div class="text-start col text-white"><i class='bx bxl-windows'></i>
                            </div>
                            @elseif($topProduct->devices == "apple")
                            <div class="text-start col text-white"><i class='bx bxl-apple'></i>
                            </div>
                            @elseif($topProduct->devices == "play")
                            <div class="text-start col text-white"><i class="fa-brands fa-playstation"></i></div>
                            @elseif($topProduct->devices == "xbox")
                            <div class="text-start col text-white"><i class="fa-brands fa-xbox"></i>
                            </div>
                            @elseif($topProduct->devices == "pc")
                            <div class="text-start col text-white"><i class='bx bxl-apple'></i>&nbsp;<i class='bx bxl-windows'></i></div>
                            @elseif($topProduct->devices == "console")
                            <div class="text-start col text-white"><i class="fa-brands fa-playstation"></i>&nbsp;<i class="fa-brands fa-xbox"></i></div>
                            @elseif($topProduct->devices == "all")
                            <div class="text-start col text-white">
                                <i class="fa-brands fa-playstation"></i>&nbsp;
                                <i class="fa-brands fa-xbox"></i>&nbsp;
                                <i class='bx bxl-windows'></i>&nbsp;
                                <i class='bx bxl-apple'></i>
                            </div>
                            @endif
                        </div>
                    </div>
                    <br>
                    <div class="row text-aligne">
                        <div class="text-start col-6">
                            <a href="/{{$topProduct->id}}" class="btn btn-buy"><i class='bx bx-cart-add'></i></a>
                        </div>
                        @if($topProduct->price_game>0)
                        <div class="text-end col-6 price">{{$topProduct->price_game}} DH</div>
                        @else
                        <div class="text-end col-6 price">Free</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection