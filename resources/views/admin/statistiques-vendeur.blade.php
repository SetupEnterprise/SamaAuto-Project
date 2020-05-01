@extends('layouts.master_admin', ['title' => 'Statisques des Vendeurs'])

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
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Authentification</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">800</div>
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
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1"></div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
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
                <h4 class="card-title">Billets Vendus par le Vendeur</h4>
                <div class="card-category">
                  <form action="" method="POST">
                    <div class="form-group">
                    <select name="mois" class="form-control">
                      <option value="janvier">Janvier</option>
                      <option value="fevrier">Février</option>
                      <option value="mars">Mars</option>
                      <option value="avril">Avril</option>
                      <option value="mai">Mai</option>
                      <option value="juin">Juin</option>
                      <option value="juillet">Juillet</option>
                      <option value="aout">Aout</option>
                      <option value="septembre">Septembre</option>
                      <option value="octobre">Octobre</option>
                      <option value="novembre">Novembre</option>
                      <option value="decembre">Décembre</option>
                    </select>
                  </div>
                  </form>
                </div>
            </div>
            <div class="card-body ">
                <div class="ct-chart">
                  <canvas id="barVendeur"></canvas>
                </div>
            </div>
        </div>
      </div>

      
     
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection