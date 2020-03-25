<div class="col-lg-3">
    <div class="col-lg-6">    
        <form action="{{ route('vehicule.update',['vehicule'=>$voirVehicule->vehicules_id]) }}"
         method="POST"> 
        @csrf   
        @method('PUT')
            <div class="form-group">
              <label for="">Matricule véhicule</label>
              <input type="text" class="form-control" name="matricule" id="" aria-describedby="helpId" 
              placeholder="" value="{{ old('matricule') ? old('matricule'): $voirVehicule->matricule}}" disabled>

              @if ($errors->has('matricule'))
                  <small id="helpId" class="form-text text-muted">
                  {{ $errors->first('matricule')}}
                  </small>
              @endif
              
            </div>

            <div class="form-group">
              <label for="categorie">Catégorie véhicule</label>
              <select class="form-control" name="categorie" id="categorie">
                <option value="{{ $voirCategorie->categories_id}}" selected>{{ $voirCategorie->categorie }}</option>
                @foreach ($allCategories as $al)
                    <option value="{{ $al->categories_id}}">{{ $al->categorie}}</option>                    
                @endforeach
              </select>
            </div>            

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>