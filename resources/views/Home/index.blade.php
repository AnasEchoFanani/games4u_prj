@extends('Layouts.app_Principale')
@section('home','active')
@section('content')
    <div class="black">
        <div class="container-fluid mt-5 pt-5">
            <div class="row">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images_site/fortnite-black-adam-1900x600-62cd84a238e3.jpg" class="d-block w-100"
                                 alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images_site/fortnite-league-of-legends-jinx-1900x600-f555ed5b5bc0.jpg"
                                 class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images_site/fortnite-rocket-league-octane-1900x600-6ed2bd9efc2f.jpg"
                                 class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row mt-4 p-1 aligne-center">
                    <div class="col-4">
                        <h3>Top Games</h3>
                    </div>
                    <div class="col-4 text-end "><a class="more-link" href="#">more</a></div>
                </div>
                <div class="row mt-3">
                    @foreach($product as $topProduct)
                        <div class="col-2">
                            <div class="card">
                                <img src="Folder_img/{{$topProduct->photo_1}}" class="card-img-top image-game"
                                     alt="Photo_1">
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
                                                <div class="text-start col text-white"><i
                                                        class="fa-brands fa-playstation"></i></div>
                                            @elseif($topProduct->devices == "xbox")
                                                <div class="text-start col text-white"><i class="fa-brands fa-xbox"></i>
                                                </div>
                                            @elseif($topProduct->devices == "pc")
                                                <div class="text-start col text-white"><i class='bx bxl-apple'></i>&nbsp;<i
                                                        class='bx bxl-windows'></i></div>
                                            @elseif($topProduct->devices == "console")
                                                <div class="text-start col text-white"><i
                                                        class="fa-brands fa-playstation"></i>&nbsp;<i
                                                        class="fa-brands fa-xbox"></i></div>
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
                                            <a href="/{{$topProduct->id}}" class="btn btn-buy"><i
                                                    class='bx bx-cart-add'></i></a>
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
            <div class="row">
                <div class="row mt-4 p-1 aligne-center">
                    <div class="col-4">
                        <h3>Sport</h3>
                    </div>
                    <div class="col-4 text-end "><a class="more-link" href="#">more</a></div>
                </div>
                <div class="row mt-3">
                    @foreach($product_genre_sport as $topProduct)
                        <div class="col-2">
                            <div class="card">
                                <img src="Folder_img/{{$topProduct->photo_1}}" class="card-img-top image-game"
                                     alt="Photo_1">
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
                                                <div class="text-start col text-white"><i
                                                        class="fa-brands fa-playstation"></i></div>
                                            @elseif($topProduct->devices == "xbox")
                                                <div class="text-start col text-white"><i class="fa-brands fa-xbox"></i>
                                                </div>
                                            @elseif($topProduct->devices == "pc")
                                                <div class="text-start col text-white"><i class='bx bxl-apple'></i>&nbsp;<i
                                                        class='bx bxl-windows'></i></div>
                                            @elseif($topProduct->devices == "console")
                                                <div class="text-start col text-white"><i
                                                        class="fa-brands fa-playstation"></i>&nbsp;<i
                                                        class="fa-brands fa-xbox"></i></div>
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
                                            <a href="/{{$topProduct->id}}" class="btn btn-buy"><i
                                                    class='bx bx-cart-add'></i></a>
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
            <div class="row">
                <div class="row mt-4 p-1 aligne-center">
                    <div class="col-4">
                        <h3>Action</h3>
                    </div>
                    <div class="col-4 text-end "><a class="more-link" href="#">more</a></div>
                </div>
                <div class="row mt-3">
                    @foreach($product_genre_action as $topProduct)
                        <div class="col-2">
                            <div class="card">
                                <img src="Folder_img/{{$topProduct->photo_1}}" class="card-img-top image-game"
                                     alt="Photo_1">
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
                                                <div class="text-start col text-white"><i
                                                        class="fa-brands fa-playstation"></i></div>
                                            @elseif($topProduct->devices == "xbox")
                                                <div class="text-start col text-white"><i class="fa-brands fa-xbox"></i>
                                                </div>
                                            @elseif($topProduct->devices == "pc")
                                                <div class="text-start col text-white"><i class='bx bxl-apple'></i>&nbsp;<i
                                                        class='bx bxl-windows'></i></div>
                                            @elseif($topProduct->devices == "console")
                                                <div class="text-start col text-white"><i
                                                        class="fa-brands fa-playstation"></i>&nbsp;<i
                                                        class="fa-brands fa-xbox"></i></div>
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
                                            <a href="/{{$topProduct->id}}" class="btn btn-buy"><i
                                                    class='bx bx-cart-add'></i></a>
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
        </div>
    </div>
@endsection
