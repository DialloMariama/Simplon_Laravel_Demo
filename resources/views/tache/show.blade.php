@include('default')

<div class="container my-5">
    <h1>
        JE SOUHAITE AFFICHER LES DETAILS SUR LA TACHE SELECTIONNEE
    </h1>
</div>
<div class="card">
    <h5 class="card-header">Nom de la tache: {{$tacheTrouvee->nom_tache}} </h5>
    <div class="card-body">
        <h5 class="card-title">Priorité: {{$tacheTrouvee->priorite}}</h5>
        <p class="card-text">{{$tacheTrouvee->description_tache}}</p>
        <p class="card-text">
            @if($tacheTrouvee->is_termine)
                Terminée
            @else
                En cours <br>
                <a href="/tache/termine/{{$tacheTrouvee->id}}" class="btn btn-primary">Terminer</a>
            @endif

        </p>
    </div>
</div>