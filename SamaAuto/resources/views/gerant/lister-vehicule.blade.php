<table class="table">
    <thead>
        <tr>
            <th>Identifiant</th>
            <th>Matricule</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listeVehicule as $lc)
            <tr>
                <td scope="row">{{ $lc->vehicules_id}}</td>
                <td scope="row">{{ $lc->matricule}}</td>
                <td scope="row">
                    <a class="btn btn-primary" 
                     href="{{ route('vehicule.show',['vehicule'=>$lc->vehicules_id]) }}" role="button">
                        Voir
                    </a><br>
                    <a class="btn btn-primary" 
                     href="{{ route('vehicule.edit',['vehicule'=>$lc->vehicules_id]) }}" role="button">
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