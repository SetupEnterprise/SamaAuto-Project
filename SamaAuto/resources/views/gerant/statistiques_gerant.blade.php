@extends('layouts/master_gerant', [ 'title' => 'Statistiques'])

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
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Voyage total</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Vehicules disponibles</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">200</div>
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
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Points de Ventes</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50</div>
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

            <div class="col-xl-8 col-lg-7">

              

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
                  <p> Date : 12/01/2020 </p>
                  <div class="px-3 py-5 bg-gradient-primary text-white">heure de depart: 04h30 <br> Horaire Mbacke<br> numero: 77 852 23 25</div>
                  <br>
                  <div class="px-3 py-5 bg-gradient-primary text-white">heure de depart: 07h30 <br> Horaire Saint-Louis<br> numero: 77 852 23 25</div>
                  <br>
                  <div class="px-3 py-5 bg-gradient-primary text-white">heure de depart: 10h30 <br> Horaire Bambey<br> numero: 77 852 23 25</div>
                  <br>
                  <hr>
                  <p> Date : 05/02/2020 </p>
                  <div class="px-3 py-5 bg-gradient-primary text-white">heure de depart: 02h00 <br> Horaire Louga<br> numero: 77 852 23 25</div>
                  <br>
                  <div class="px-3 py-5 bg-gradient-primary text-white">heure de depart: 07h00 <br> Horaire Mbour<br> numero: 77 852 23 25</div>
                  <br>
                  <div class="px-3 py-5 bg-gradient-primary text-white">heure de depart: 10h0 <br> Horaire Matam<br> numero: 77 852 23 25</div>
                  <br>
                  <hr>
                  <p> Date : 12/02/2020 </p>
                  <div class="px-3 py-5 bg-gradient-primary text-white">heure de depart: 05h00 <br> Horaire Louga<br> numero: 77 852 23 25</div>
                  <br>
                  <div class="px-3 py-5 bg-gradient-primary text-white">heure de depart: 11h40 <br> Horaire Mbour<br> numero: 77 852 23 25</div>
                  <br>
                  <div class="px-3 py-5 bg-gradient-primary text-white">heure de depart: 20h30 <br> Horaire Matam<br> numero: 77 852 23 25</div>
                  <br>
                  <hr>
                </div>
              </div>

            </div>

           
          </div>

        </div>
        <!-- /.container-fluid -->
@stop