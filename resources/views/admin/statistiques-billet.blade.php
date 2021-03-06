@extends('layouts.master_admin', ['title' => 'Statisques des Billets'])

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
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Billet</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalBillet}}</div>
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
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Billets Vendus</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalVendu}}</div>
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
        <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Billets Reportes</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalReporte}}</div>
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
            <div class="card-header ">
                <h4 class="card-title">2020 Billets Vendus</h4>
                <p class="card-category">Billets vendus par mois</p>
            </div>
            <div class="card-body ">
                <div class="ct-chart">
                  <canvas id="barBilletSold"></canvas>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-12 col-lg-7">
        <!-- Bar Chart -->
        <div class="card shadow mb-4">
            <div class="card-header ">
                <h4 class="card-title">2020 Billets Reportés</h4>
                <p class="card-category">Billets reportés par mois</p>
            </div>
            <div class="card-body ">
                <div class="ct-chart">
                  <canvas id="barBilletReport"></canvas>
                </div>
            </div>
        </div>
      </div>

     
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
@section('scripts')
<script src="{{ asset('chart.js/Chart.min.js')}}"></script>
<script src="{{ asset('/js/bar-billets.js')}}"></script>   
@endsection