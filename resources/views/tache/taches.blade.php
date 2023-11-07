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
            @for($i=1; $i<= 8; $i++)
            <div class="col-12 col-md-3 my-1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nom de la tâche</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Priorité: Haute</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, voluptatum voluptatibus explicabo molestias minus dolor!.</p>
                        <a href="#" class="card-link">Supprimer</a>
                        <a href="#" class="card-link">Detail</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    
</body>
