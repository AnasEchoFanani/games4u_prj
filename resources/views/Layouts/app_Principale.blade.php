<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Games4u</title>
    <link rel="icon" href="images_site/frame_37612.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body id="body-pd" class="d-flex flex-column min-vh-100">
    <header class="header" id="header">
        <div class="header_toggle "><i class='bx bx-menu' id="header-toggle"></i>
            <a class="navbar-brand ms-1 " href="#">
            </a>
        </div>
        @if(Session::has('user_id'))
        <div class="col-6">
            <div class="input-group col-4">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
            </div>
        </div>

        <div class="header_img">
            <div class="text-white">anas fanani</div>
        </div>
        @else
        <div class="col d-flex justify-content-center">
            <div class="input-group  search">
                <input type="text" class="form-control bg-dark text-white" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn bg-dark border-white text-white" type="button">Button</button>
                </div>
            </div>
        </div>
        @endif

    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div><a href="/" class="nav_logo">
                    <img src="/images_site/frame_37612.png" class="logo_size" alt="hero_2" style="width: 15%;"></a>
                <div class="nav_list">
                    <a href="/" class="nav_link @yield('home')">
                        <i class='bx bx-home nav_icon'></i>
                        <span class="nav_name">Home</span> </a>
                    <a href="#" class="nav_link @yield('support')">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Messages</span></a>
                    <a href="/panier/afficher" class="nav_link @yield('panier')">
                        <i class='bx bx-basket nav_icon'></i>
                        <span class="nav_name">Basket</span> </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span> </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span> </a>
                </div>
            </div>
            <a href="/authentication/logout" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    @yield('content')
    <footer class="bg-black text-center text-lg-start mt-4 mt-auto">
        <div class="row">
            <div class="text-start col-6" style="background-color: rgba(0, 0, 0, 0.2);">Privacy Policy</div>
            <div class="text-end col-6 " style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Made with ♥ by Anas Fanani
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