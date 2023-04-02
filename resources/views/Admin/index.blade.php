<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Games4u_Admin</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="searchInput" placeholder="name@example.com">
                <label for="searchInput">Search</label>
            </div>
        </div><br>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
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
                            <td>{{$produits->price_game}}</td>
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
</body>
</html>


