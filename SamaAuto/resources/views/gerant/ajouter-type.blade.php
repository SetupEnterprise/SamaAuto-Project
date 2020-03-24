<div class="col-lg-3">
    <div class="col-lg-6">
        <form action="{{ route('categorie.store') }}" method="POST"> 
        @csrf   
            <div class="form-group">
              <label for="">Catégorie véhicule</label>
              <input type="text" class="form-control" name="categorie" id="" aria-describedby="helpId" 
              placeholder="Bus, 7 places, mini car, ..." value="{{ old('type')}}">

              @if ($errors->has('type'))
                  <small id="helpId" class="form-text text-muted">
                  {{ $errors->first('type')}}
                  </small>
              @endif
              
            </div>

            <div class="form-group">
              <label for="">Nombre de places</label>
              <input type="text" class="form-control" name="nbre_place" id="" aria-describedby="helpId"
              value="{{ old('nbre_place')}}" placeholder="">

            @if ($errors->has('nbre_place'))
                  <small id="helpId" class="form-text text-muted">
                  {{ $errors->first('nbre_place')}}
                  </small>
            @endif
            </div>

            

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>