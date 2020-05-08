<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Supprimer le voyage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Voulez vous supprimer le voyage du véhicule <span id="supprimer_info">{{ $lv->matricule}}</span>
        pour le trajet <span id="supprimer_info">{{ $lv->point_depart}} - {{ $lv->point_arrivee }}</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <a href= "/supprimer_voyage/{{ $lv->vehicule_trajet_id }}">
            <button type="button" class="btn btn-danger">Supprimer</button>
        </a>
      </div>
    </div>
  </div>
</div>
