<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Liste disques</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/backend.css')}}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-red flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Gestion disques</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Quitter</a>
        </li>
    </ul>
</nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Liste des disques</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                   
                    <a href="ajout">
                        Nouveau
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead class="table-dark">
                    <tr>
                        <th>Titre </th>
                        <th>Artiste</th>
                        <th>Date sortie</th>
                        <th>Auteur </th>
                        <th>Compositeur </th>
                        <th>Producteur </th>
                        <th>Genre </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($discs as $disc)
                            <tr>
                                

                                    <td>{{$disc->titre}}</td>
                                    <td>{{$disc->artistes}}</td>
                                    <td>{{$disc->dateSortie}}</td>
                                    <td>{{$disc->auteur}}</td>
                                    <td>{{$disc->compositeur}}</td>
                                    <td>{{$disc->producteur}}</td>
                                    <td>{{$disc->genre}}</td>
                                    <td>
                                            <button class="btn btn-sm btn-primary">Voir / Modifier</button>
                                            <button class="btn btn-sm btn-outline-danger">Supprimer</button>
                                    </td>

                               
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/holder.min.js')}}"></script>

</body>
</html>
