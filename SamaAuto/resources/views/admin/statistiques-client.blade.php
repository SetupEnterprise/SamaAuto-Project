@extends('layouts.master_admin')

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
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Inscription</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">48</div>
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
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Authentification</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">350</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>



    <!-- Content Row -->
    <div class="row">

      <div class="col-xl-12 col-lg-7">
        <!-- Bar Chart -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Diagramme des Inscriptions de clients par mois</h6>
          </div>
          <div class="card-body">
            <div class="chart-bar">
              <canvas id="myBarChart"></canvas>
            </div>
            <hr>
            Le Diagramme des inscriptions mensuels nous permet de connaitre le nombre d'inscriptions des clients effectuer sur <strong>SamaAuto</strong> dans chaque mois.
          </div>
        </div>

        

      </div>

      <div class="col-xl-12 col-lg-7">
        <!-- Bar Chart -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Diagramme des authentifications de clients par mois</h6>
          </div>
          <div class="card-body">
            <div class="chart-bar">
              <canvas id="myAreaChart"></canvas>
            </div>
            <hr>
            Le Diagramme des Authentification mensuels nous permet de connaitre le nombre d'acces des clients sur  notre plateforme <strong>SamaAuto</strong> dans chaque mois.
          </div>
        </div>

        

      </div>

     
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection