@include('default')

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Liste des tâches</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($taches as $tache)
            <div class="col-12 col-md-3 my-1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$tache->nom_tache}}</h5>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">{{$tache->description_tache}}</h6> -->
                        <p class="card-text">{{$tache->priorite}}</p>
                        <a href="#" class="card-link">Supprimer</a>
                        <a href="/tache/{{$tache->id}}/details" class="card-link">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</body>
