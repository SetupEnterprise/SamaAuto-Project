<div class="col-lg-3"></div>

<div class="col-lg-6">
    <a name="" id="" class="btn btn-primary" href="{{ route('categorie.index')}}" role="button">
    Ajouter catégorie véhicule
    </a>
    <form action="{{ route('vehicule.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- Champs matricule véhicule --}}
    <div class="form-group">
      <label for="">Matricule</label>
      <input type="text" class="form-control" name="matricule" id="" aria-describedby="helpId"
      value="{{ old('matricule')}}" placeholder="">
      @if ($errors->has('matricule'))
        <small id="helpId" class="form-text text-muted">
        {{ $errors->first('matricule')}}
        </small>
    @endif
    </div> 
    {{-- Fin Champs matricule véhicule --}}   

    {{-- Liste des catégories de véhicules --}}
    <div class="form-group">
      <label for="">Catégorie véhicule</label>
      <select class="form-control" name="categories_id" id="selectCategorie">
      <option value="">-------Veuillez sélectionner une catégorie-------</option>
      @foreach ($categorie as $c)
        <option value="{{ $c->categories_id}}">{{ $c->categorie}} {{ $c->nbre_place}} places</option>          
      @endforeach
      </select>
      @if ($errors->has('categories_id'))
        <small id="helpId" class="form-text text-muted">
        {{ $errors->first('categories_id')}}
        </small>
        @endif
      <p id="demo"></p>
    </div>
    {{-- Fin Liste des catégories de véhicules --}}
     
    {{-- <div class="form-group">
      <label for="">Nombre de places</label>
      <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" disabled>
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div> --}}

    {{-- Image du véhicule --}}
    <div class="form-group">
      <label class="custom-file">Image</label>
        <input type="file" name="image_vehicule" id="" placeholder="" class="custom-file-input"
         aria-describedby="fileHelpId">
        <span class="custom-file-control"></span>
      
      @if ($errors->has('image_vehicule'))
        <small id="helpId" class="form-text text-muted">
        {{ $errors->first('image_vehicule')}}
        </small>
    @endif
    </div>
    {{-- Fin Image du véhicule --}}

    {{-- Boutton Submit --}}
    <button type="submit" class="btn btn-primary">Ajouter</button>

    </form>

</div>
