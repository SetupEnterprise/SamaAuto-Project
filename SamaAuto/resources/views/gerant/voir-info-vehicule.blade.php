<h3>Matricle : {{ $voirVehicule->matricule }}</h3>
<h3>Catégorie véhicule {{ $voirCategorie->categorie}}</h3>
<h3>Nombre de places {{ $voirCategorie->nbre_place}}</h3>
<h3>Image véhicule 
<img src="/image_vehicule/{{$voirVehicule->image_vehicule}}"
 class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""/>
 </h3>
 <br>
<a class="btn btn-primary" 
    href="{{ route('vehicule.edit',['vehicule'=>$voirVehicule->vehicules_id.' '.$voirVehicule->categories_id]) }}" role="button">
    Modifier
</a><br>
<a class="btn btn-danger" href="#" role="button">
    Supprimer
</a>