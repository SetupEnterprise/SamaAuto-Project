@extends('layouts.master_admin')

@section('contenu_page')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">


      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Authentification</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">42</div>
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

      <div class="col-xl-8 col-lg-7">
        <!-- Bar Chart -->
        <div class="">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Historiques des gérants</h6>
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
          </div> -->

          <div class="card  card-tasks">
            <div class="card-header ">
                <h4 class="card-title">Historiques des gerants</h4>
            </div>
            <div class="card-body ">
                <div class="table-full-width">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Modou Fall : incription Vendeur 1</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Ousmane Ndiaye : Lister Voyage</td>
                                
                            </tr>
                            <tr>
                                <td> </td>
                                <td>Modou Fall : Ajouter un trajet</td>
                                
                            </tr>
                            <tr>
                                <td></td>
                                <td>Mamadou Dieng : Ajouter un Vehicule</td>
                               
                            </tr>
                            <tr>
                                <td></td>
                                <td>Modou Fall : Lister les arrets</td>
                              
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer ">
                <div class="stats">
                    <i class="now-ui-icons loader_refresh spin"></i> 
                    L'historique relate l'ensemble des activites menees par les gerants sur la plateforme <strong>SamaAuto</strong>. 
                </div>
            </div>
        </div>
        </div>

        

      </div>

      <div class="col-xl-4 col-lg-7">
        <!-- Bar Chart -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Diagramme des authentifications mensuelles par gerant</h6>
          </div>
          <div class="card-body">
            <div class="chart-bar">
              <canvas id="myPieChart"></canvas>
            </div>
            <hr>
            Le Diagramme des Authentifications mensuelles nous permet de connaitre le nombre d'acces de chaque gerant sur  notre plateforme <strong>SamaAuto</strong> dans chaque mois.
          </div>
        </div>

        

      </div>

     
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection