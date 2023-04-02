<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Games4u_Admin</title>
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
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/admin">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="">Ajouter Produit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="">Afficher Commande</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">Deconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered table-dark">
                                    <thead class="text-center ">
                                        <tr>
                                            <th scope="col">game_name</th>
                                            <th scope="col">price_game</th>
                                            <th scope="col">disponibiliter</th>
                                            <th scope="col">categorie</th>
                                            <th scope="col">Modifier / Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center align-middle">
                                        @foreach($product as $produits)
                                        <tr>
                                            <td data-searchable="{{$produits->game_name}}">{{$produits->game_name}}</td>
                                            <td>{{$produits->price_game}} DH</td>
                                            <td>{{$produits->disponibiliter}}</td>
                                            <td data-searchable="{{$produits->categorie}}">{{$produits->categorie}}</td>
                                            <td>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">

                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i></button>

                                                    </li> / &nbsp;
                                                    <li class="list-inline-item">

                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
</body>

</html>