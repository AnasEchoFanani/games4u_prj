<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Games4u</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle "> <i class='bx bx-menu' id="header-toggle"></i>
            <a class="navbar-brand ms-1 " href="#">
            </a>
        </div>
        <div class="header_img">
            <img src="https://i.imgur.com/hczKIze.jpg" alt="">
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo">
                    <img src="images_site/frame_37612.png" class="logo_size" alt="hero_2" style="width: 15%;">
                    <span class="nav_logo-name">Games4u</span> </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bx-home nav_icon'></i>
                        <span class="nav_name">Home</span> </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Users</span> </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Messages</span></a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-basket nav_icon'></i>
                        <span class="nav_name">Basket</span> </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span> </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span> </a>
                </div>
            </div> <a href="#" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="black">
        <div class="container-fluid mt-5 pt-5">
            <div class="row">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images_site/fortnite-black-adam-1900x600-62cd84a238e3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images_site/fortnite-league-of-legends-jinx-1900x600-f555ed5b5bc0.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images_site/fortnite-rocket-league-octane-1900x600-6ed2bd9efc2f.jpg" class="d-block w-100" alt="...">
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
                            <img src="Folder_img/{{$topProduct->photo_1}}" class="card-img-top image-game" alt="Photo_1">
                            <div class="card-body">
                                <h6 class="card-title">{{$topProduct->game_name}}</h6>
                                <div class="row text-aligne">
                                    <div class="text-start col-6">
                                        <a href="#" class="btn btn-buy"><i class='bx bx-cart-add'></i></a>
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
                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2">
                        <div class="short-div" style="background-color:green">vid 1</div>
                        <div class="short-div" style="background-color:purple">vid 2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container Main end-->
    <footer class="bg-black text-center text-lg-start mt-4">
        <div class="row">
            <div class="text-start col-6" style="background-color: rgba(0, 0, 0, 0.2);">Privacy Policy</div>
            <div class="text-end col-6 " style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Made with ♥ by Anas
            </div>
        </div>

    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });
    </script>
</body>

</html>