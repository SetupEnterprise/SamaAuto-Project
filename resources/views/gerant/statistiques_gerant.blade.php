@extends('layouts/master_gerant', [ 'title' => 'Statistiques gérant'])

@section('contenu_page')

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total véhicule
                        </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_vehicule }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total voyage créé</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_voyage }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Trajets</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $total_trajet }}</div>
                        </div>
                       <!-- <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-1 col-lg-2">

            </div>
            <div class="col-xl-10 col-lg-9">
              <!-- Bar Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Diagramme des voyages mensuels</h6>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                  </div>
                  <hr>
                  Le Diagramme des voyages mensuels nous permet de connaitre le nombre de voyage qui se passe en utilisant la plateforme <strong>SamaAuto</strong> dans chaque mois.
                </div>
              </div>

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Historiques des voyages</h6>
                </div>
                <div class="card-body">
                  @foreach ($dates as $date)
                    <p> Date : {{$date->date_voyage}}</p>
                    @foreach ($listeVoyage as $list)
                        @if ($date->date_voyage == $list->date_voyage)
                          <div class="px-3 py-5 bg-gradient-primary text-white">
                            Trajet : {{$list->point_depart}}-{{$list->point_arrivee}} <br>
                            Heure de depart :  {{$list->heure_de_depart}}<br>
                            Matricule : {{$list->matricule}} <br>
                            Categorie : {{ $list->categorie}} <br>
                            prix : {{ $list->prix}}F CFA
                          </div>
                          <br>
                        @endif
                    @endforeach
                    <hr>
                  @endforeach
                </div>
              </div>

            </div>


          </div>

        </div>
        <!-- /.container-fluid -->
@stop
@section('scripts')
    <!-- Page level plugins -->
   <script src="{{ asset('chart.js/Chart.min.js')}}"></script>

   <script src={{ asset('js/chart-bar-demo.js')}}></script>
@endsection