@extends('layouts.master_gerant')

@section('contenu_page')

    <!-- Content Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            @if(session()->has('messageVoyageCreate'))
                <span class="alert alert-success">
                    {{ session()->get('messageVoyageCreate') }}
                </span>
            @endif

            @if(session()->has('messageMatriculeNoExiste'))
                <span class="alert alert-danger">
                    {{ session()->get('messageMatriculeNoExiste') }}
                </span>
            @endif

            @if(session()->has('messageVilleEgale'))
                <span class="alert alert-danger">
                    {{ session()->get('messageVilleEgale') }}
                </span>
            @endif

            @if(session()->has('messageTrajetNoExiste'))
                <span class="alert alert-danger">
                    {{ session()->get('messageTrajetNoExiste') }}
                </span>
            @endif

            @if(session()->has('messageVoyageExiste'))
                <span class="alert alert-danger">
                    {{ session()->get('messageVoyageExiste') }}
                </span>
            @endif
            @if(session()->has('messageErreurDate'))
                <span class="alert alert-danger">
                    {{ session()->get('messageErreurDate') }}
                </span>
            @endif


        </div>


        <form action="{{ route('voyage.store') }}" method="POST">
        @csrf
            <div class="row">

                {{--1/ Information du véhicule --}}
                <div class="col-lg-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Information véhicule</h6>
                    </div>

                    <div class="form-group">
                        <label for="">Matricule *</label>
                        <input type="text" name="matricule" class="form-control"
                        value="{{ old('matricule') }}" placeholder="Saisir le matricule du véhicule">
                        {{-- Affichage erreur --}}
                        @if ($errors->has('matricule'))
                            <span class="custom-control-description text-danger">
                                {{ $errors->first('matricule')}}
                            </span>
                        @endif
                    </div>
                </div>
                {{-- Fin Info véhicule --}}

                {{--2/ Informations du trajet --}}
                <div class="col-lg-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Informations du trajet</h6>
                    </div>

                    <div class="form-group">
                        <label for="">Ville de départ *</label>
                        <input type="text" name="ville_de_depart" class="form-control"
                        value="{{ old('ville_de_depart') }}" placeholder="Saisir la ville de départ">

                        @if ($errors->has('ville_de_depart'))
                            <span class="custom-control-description text-danger">
                                {{ $errors->first('ville_de_depart')}}
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Ville de destination *</label>
                        <input type="text" name="ville_de_destination" class="form-control"
                        value="{{ old('ville_de_destination') }}" placeholder="Saisir la ville de destination">
                        @if ($errors->has('ville_de_destination'))
                            <span class="custom-control-description text-danger">
                                {{ $errors->first('ville_de_destination')}}
                            </span >
                        @endif
                    </div>
                </div>
                {{-- Fin Info trajet --}}

                {{--3/ Information de l'horaire --}}
                <div class="col-lg-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Informations de l'horaire</h6>
                    </div>
                    {{-- Affichage Erreur  --}}
                    <div class="form-group">
                        <label for="">Date de départ *</label>
                        <input type="date" class="form-control" name="date_voyage" placeholder="">
                        @if ($errors->has('date_voyage'))
                            <span class="custom-control-description text-danger">
                                {{ $errors->first('date_voyage')}}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Heure de départ *</label>
                        <input type="time" class="form-control" name="heure_de_depart" placeholder="">
                            @if ($errors->has('heure_de_depart'))
                                <span class="custom-control-description text-danger">
                                    {{ $errors->first('heure_de_depart')}}
                                </span >
                            @endif
                    </div>
                </div>
                {{-- Fin info horaire --}}
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <button type="submit" class="btn btn-primary col-lg-6">
                        Créer le voyage
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

{{-- Ajax Script --}}
{{-- <script>
    $(document).ready(function () {
        info_vehicule();
        function info_vehicule(query = '') {
            $.ajax({
                url:"{{ route('voyage.action') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data){
                    $('tbody').html(data.table_data);
                    $('#categorie').text(data.categories);
                    $('#nbre_place').text(data.nbre_place);
                }
            })
        }
        $(document).on('keyup', '#matricule',function name(params) {
            var query = $(this).val();
            info_vehicule(query);
        });
    });
</script> --}}
@endsection

{{-- <div class="col-lg-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informations Arrets</h6>
                </div>
                <div class="form-group">
                    <label for="">Input1</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>
            </div> --}}
