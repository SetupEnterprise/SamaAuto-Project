<table class="table">
    <thead>
        <tr>
            <th>Identifiant</th>
            <th>Catégorie</th>
            <th>Nombre de places</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listeCategorie as $lc)
            <tr>
                <td scope="row">{{ $lc->categories_id}}</td>
                <td scope="row">{{ $lc->categorie}}</td>
                <td scope="row">{{ $lc->nbre_place}}</td>
                <td scope="row">
                    <a class="btn btn-primary" 
                     href="{{ route('categorie.show',['categorie'=>$lc->categories_id]) }}" role="button">
                        Modifier
                    </a><br>
                    <a class="btn btn-danger" href="#" role="button">
                        Supprimer
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>