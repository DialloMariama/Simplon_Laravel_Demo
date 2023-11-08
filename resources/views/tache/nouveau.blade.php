@include('default')

<div class="container">
    <div class="">
        <div class="text-center">
            Je souhaite créer une nouvelle tâche
        </div>
    </div>
</div>
<form method="POST" action="/tache/save">
    @csrf
    <div class="form-group my-3">
        <label for="nom_tache">Nom de la tâche</label>
        <input type="text" class="form-control" name="nom" placeholder="Example input">
    </div>
    <div class="form-group my-3">
        <label for="description_tache">Description de la tâche</label>
        <input type="text" name="description" class="form-control" id="description_tache" placeholder="Another input">
    </div>
    <div class="form-group my-3">
        <label for="description_tache">Date d'écheance</label>
        <input type="date" name="date" class="form-control" id="description_tache" placeholder="Another input">
    </div>
    <div class="form-group my-3">
        <select class="form-select form-select-lg mb-3" name="priorite" aria-label=".form-select-lg example">
            <option selected>Priorite</option>
            <option value="haute">Haute</option>
            <option value="moyenne">Moyenne</option>
            <option value="faible">Faible</option>
        </select>

    </div>
    <div class="form-group my-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="0" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Déjà términée?
            </label>
        </div>
+    </div>
    <div class="form-group my-3">
        <button name="ajouter" type="submit" class="btn btn-success">Success</button>
    </div>
</form>