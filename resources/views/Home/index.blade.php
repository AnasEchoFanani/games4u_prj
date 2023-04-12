@extends('Layouts.app_Principale')
@section('content')
    <div class="cont">
        <div class="welcome">Good
            Evening
            Anas..!
        </div>
        <div class="welcom2">Welcome
            to
            Games4u
            game
            zone
        </div>
    </div>
    <div class="a1">
        <video autoplay muted loop src="images_site/1234.mp4">
        </video>
        <div class="a4">
            <div class="a3">Let
                The
                <span class="collor">Gaming</span>
                <br>Begin
            </div>
            <div class="a5">
                <button class="a6 btn">Know More</button>
                <button class="a7 btn">Buy</button>
            </div>
        </div>
    </div>
    <div class="chose">
        <div class="chose1">
            <div class="games">News</div>
            <a href="#" class="more">More</a>
        </div>

        <div class="chose3">@foreach($product as $Product)
                <div class="chose2"><a style="text-decoration: none;" href="#">
                        <img class="imginchose2" src="Folder_img/{{$Product->photo_1}}" alt="">
                        <div class="chose4">
                            <div class="ecri1">{{$Product->game_name}}
                            </div>
                            <div class="roww">
                                <div class="ecri2 text-white">
                                    <span style="color: #AA1D66;">Price</span> <span class="text-white"><i
                                            class="fa-solid fa-money-bill-1"></i> {{$Product->price_game}}</span>
                                </div>
                                <div class="ecri2 text-white">
                                    <span style="color: #AA1D66;">type</span> <span
                                        class="text-white"> {{$Product->type}} </span>
                                </div>
                                <div class="ecri2 text-white">
                                    @if($Product->devices == 'all')
                                        <span><i class="fa-solid fa-desktop"></i></span><span><i
                                                class="fa-brands fa-xbox"></i></span><span><i
                                                class="fa-brands fa-playstation"></i></span>
                                    @elseif($Product->devices == 'play')
                                        <span><i class="fa-brands fa-playstation"></i></span>
                                    @elseif($Product->devices == 'xbox')
                                        <span><i class="fa-brands fa-xbox"></i></span>
                                    @elseif($Product->devices == 'windows')
                                        <span><i class="fa-brands fa-windows"></i></span>
                                    @elseif($Product->devices == 'apple')
                                        <span><i class="fa-brands fa-apple"></i></span>
                                    @elseif($Product->devices == 'console')
                                        <span><i class="fa-brands fa-xbox"></i></span><span><i
                                                class="fa-brands fa-playstation"></i></span>
                                    @elseif($Product->devices == 'pc')
                                        <span><i class="fa-solid fa-desktop"></i></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="chose_games_2">
        <div class="chose1">
            <div class="games">Games</div>
            <a href="#" class="more">More</a>
        </div>

        <div class="chose3">@foreach($product as $Product)
                <div class="chose2"><a style="text-decoration: none;" href="#">
                        <img class="imginchose2" src="Folder_img/{{$Product->photo_1}}" alt="">
                        <div class="chose4">
                            <div class="ecri1">{{$Product->game_name}}
                            </div>
                            <div class="roww">
                                <div class="ecri2 text-white">
                                    <span style="color: #AA1D66;">Price</span> <span class="text-white"><i
                                            class="fa-solid fa-money-bill-1"></i> {{$Product->price_game}}</span>
                                </div>
                                <div class="ecri2 text-white">
                                    <span style="color: #AA1D66;">type</span> <span
                                        class="text-white"> {{$Product->type}} </span>
                                </div>
                                <div class="ecri2 text-white">
                                    @if($Product->devices == 'all')
                                        <span><i class="fa-solid fa-desktop"></i></span><span><i
                                                class="fa-brands fa-xbox"></i></span><span><i
                                                class="fa-brands fa-playstation"></i></span>
                                    @elseif($Product->devices == 'play')
                                        <span><i class="fa-brands fa-playstation"></i></span>
                                    @elseif($Product->devices == 'xbox')
                                        <span><i class="fa-brands fa-xbox"></i></span>
                                    @elseif($Product->devices == 'windows')
                                        <span><i class="fa-brands fa-windows"></i></span>
                                    @elseif($Product->devices == 'apple')
                                        <span><i class="fa-brands fa-apple"></i></span>
                                    @elseif($Product->devices == 'console')
                                        <span><i class="fa-brands fa-xbox"></i></span><span><i
                                                class="fa-brands fa-playstation"></i></span>
                                    @elseif($Product->devices == 'pc')
                                        <span><i class="fa-brands fa-desktop"></i></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="chose_games">
        <div class="chose1">
            <div class="games">Games</div>
            <a href="#" class="more">More</a>
        </div>

        <div class="chose3">@foreach($product as $Product)
                <div class="chose2"><a style="text-decoration: none;" href="#">
                        <img class="imginchose2" src="Folder_img/{{$Product->photo_1}}" alt="">
                        <div class="chose4">
                            <div class="ecri1">{{$Product->game_name}}
                            </div>
                            <div class="roww">
                                <div class="ecri2 text-white">
                                    <span style="color: #AA1D66;">Price</span> <span class="text-white"><i
                                            class="fa-solid fa-money-bill-1"></i> {{$Product->price_game}}</span>
                                </div>
                                <div class="ecri2 text-white">
                                    <span style="color: #AA1D66;">type</span> <span
                                        class="text-white"> {{$Product->type}} </span>
                                </div>
                                <div class="ecri2 text-white">
                                    @if($Product->devices == 'all')
                                        <span><i class="fa-solid fa-desktop"></i></span><span><i
                                                class="fa-brands fa-xbox"></i></span><span><i
                                                class="fa-brands fa-playstation"></i></span>
                                    @elseif($Product->devices == 'play')
                                        <span><i class="fa-brands fa-playstation"></i></span>
                                    @elseif($Product->devices == 'xbox')
                                        <span><i class="fa-brands fa-xbox"></i></span>
                                    @elseif($Product->devices == 'windows')
                                        <span><i class="fa-brands fa-windows"></i></span>
                                    @elseif($Product->devices == 'apple')
                                        <span><i class="fa-brands fa-apple"></i></span>
                                    @elseif($Product->devices == 'console')
                                        <span><i class="fa-brands fa-xbox"></i></span><span><i
                                                class="fa-brands fa-playstation"></i></span>
                                    @elseif($Product->devices == 'pc')
                                        <span><i class="fa-brands fa-desktop"></i></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
