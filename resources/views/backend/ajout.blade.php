<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ajout disques</title>

   
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    
  
    <link href="{{asset('css/backend.css')}}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-red flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">gestion disques</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Quitter</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Ajouter un disque</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="{{asset('listeDisques')}}">Liste des disques</a>
                       
                    </div>
                </div>
            </div>
            <form action="ajout" method="POST"> 
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Titre</label>
                        <input type="text" class="form-control" id="nom" name="titre">
                    </div>    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Artiste</label>
                        <input type="text" class="form-control" id="nom" name="artiste">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Date sortie</label>
                        <input type="text" class="form-control" id="nom" name="dateSortie">
                    </div>
                    
                </div>
                
               <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Auteur</label>
                        <input type="text" class="form-control" id="nom" name="auteur">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Compositeur</label>
                        <input type="text" class="form-control" id="nom" name="compositeur">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Producteur</label>
                        <input type="text" class="form-control" id="nom" name="producteur">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Genre</label>
                        <input type="text" class="form-control" id="nom" name="genre">
                    </div>
                    
                </div>

                <div class="form-row">
                   <div class="form-group">
                       <label for="photo">Photo du disque</label>
                       <input type="file" class="form-control-file" id="photo_principale" name="photo">
                   </div>
               </div>
               <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Rayon de classement</label>
                        <input type="text" class="form-control" id="nom" name="rayon">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Etagère</label>
                        <input type="text" class="form-control" id="nom" name="etagere">
                    </div>
                    
                </div>

                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/holder.min.js')}}"></script>

</body>
</html>