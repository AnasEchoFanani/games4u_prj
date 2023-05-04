<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Games4u</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="d-flex flex-column bg-black min-vh-100">
<nav class="navbar navbar-expand-lg navstyle">
    <div class="container-fluid text-center d-flex align-items-center justify-content-between">
        <!-- Add the d-flex and align-items-center classes here -->
        <a class="navbar-brand ms-1 logo_size" href="#">
            <img src="images_site/frame_37612.png" class="logo"
                 alt="hero_2"></a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <i class="fa-solid fa-house"></i></a>
                </li>&nbsp;
                <li class="nav-item">
                    <a class="nav-link" href="#"> All Games <i class="fa-solid fa-gamepad"></i></a>
                </li>
                <li>
                    <div class="dropdown">
                        <a class=" nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Dropdown link
                        </a>

                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item text-black" href="#">Action</a></li>
                            <li><a class="dropdown-item text-black" href="#">Another action</a></li>
                            <li><a class="dropdown-item text-black" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-black" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>
        </div>
        <div class="d-flex align-items-center text-white">
            <i class="fa-solid fa-bell"></i>
            <span class="badge bg-danger ms-1">3</span>
        </div>
    </div>
</nav>


<div class="container mt-5">
    <h1>Welcome to my Bootstrap 5 template!</h1>
    <p>
        This template includes a navbar, a body, and a footer. It is fully responsive and mobile-friendly.
    </p>
</div>
<footer class="bg-light text-center text-lg-start mt-auto">
    <div class="container p-4">
        <div class="row"></div>
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Footer Content</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed
                    cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-dark">
                            Home</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">About</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Services</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text-dark">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Company Name: <a class="text-dark" href="#">Example.com</a>
    </div>
</footer>
</body>
</html>
