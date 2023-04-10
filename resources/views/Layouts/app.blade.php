<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images_site/906343.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body class="bg-dark">

    <nav class="navbar navbar-expand-md navbar-dark bg-black text-white">
        <div class="container-fluid">
            <div class="form navbar-brand abs">
                <input type="text" class="form-control" id="searchInput" placeholder="search">
            </div>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapseNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item @yield('style-active-home')">
                        <a class="nav-link text-white" href="{{ route('admin.index') }}">Home</a>
                    </li>
                    <li class="nav-item @yield('style-active-add')">
                        <a class="nav-link text-white" href="{{ route('admin.create') }}">Create Game</a>
                    </li>
                    <li class="nav-item @yield('style-active-show')">
                        <a class="nav-link text-white" href="{{ route('commande') }}">Afficher Commande</a>
                    </li>
                    <li class="nav-item @yield('style-active-genre')">
                        <a class="nav-link text-white" href="{{ route('createGenre') }}">Create Genre</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto hover">
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">Deconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <style>
        @media (min-width: 768px) {
            .navbar-brand.abs {
                position: absolute;
                width: auto;
                left: 50%;
                transform: translateX(-50%);
                text-align: center;
            }
        }

        nav {
            color: white;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#searchInput').on('input', function() {
                var query = $(this).val().toLowerCase();

                $('tbody tr').each(function() {
                    var $row = $(this);
                    var rowText = $row.text().toLowerCase();

                    if (query === '' || rowText.includes(query)) {
                        $row.show();
                    } else {
                        $row.hide();
                    }
                });
            });
        });
    </script>
</body>

</html>