{{-- //////// --}}
<div id="design_text_voyage" class="text-lg">
    <h4>Liste des arrets</h4>
</div>
    @foreach ($infoArret as $if)
        <h5>
            <span class="font-weight-bold text-success">
                {{ $if->nom_arret }}
            </span>
        </h5>
    @endforeach
