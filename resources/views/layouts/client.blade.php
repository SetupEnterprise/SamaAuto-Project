<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{$title ?? '' }}SamaAuto</title>
        <base href="/">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="{{ asset('theme-asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="{{ asset('theme-asset/css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme-asset/js/sweetalert.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/header.component.css') }}" rel="stylesheet">
        <link href="{{ asset('css/home.component.css') }}" rel="stylesheet">

        @yield('head')
    </head>
    <body>
      
            <nav>
                <div class="img">
                  <img id="image" src="{{ asset('img/samaautosloganjb1logo.png') }}"/>
                </div>
                <div class="menu">
                  <a href="#">Points de vente</a>
                  <a href="{{ route('billetForm') }}">Acheter billet</a>
                  <a href="#">Les lignes</a>
                  <a href="{{ route('gerant.auth') }}">Gérant</a>
                  <a href="{{ route('admin_auth') }}">Administrateur</a>
                </div>
                <a href="#">Se connecter</a>
            </nav>
        <div class="corps">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
              <div class="form-research">
                <form action="" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group"> 
                    <input type="text" class="form-control" name="" value="" placeholder="Point de départ" required>
                  </div>
                  <div class="form-group"> 
                    <input type="text" class="form-control" name="" value="" placeholder="Point d'arrivée" required>
                  </div>
                  <div class="form-group"> 
                    <input type="date" class="form-control" name="" value="" required>
                    </select>
                  </div>
                  <div class="form-group">
                    <select name="heure" id="" class="form-control">
                      <option>10h</option>
                      <option>12h</option>
                      <option>15h</option>
                      <option>17h</option>
                      <option>19h</option>
                      <option>20h30</option>
                    </select>
                  </div>
                <div class="form-group"> 
                  <input type="submit" class="form-control btn btn-outline-primary" name="" value="Rechercher" required>
                </div>
              </div>
                </form>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
              <div class="col-lg-4">
                <div id="info">
                  <a href="">
                    Trajet : Dakar-Thies <br>
                    Heure de depart : 20h30</br>
                    Prix : 2000 FCFA <br>
                    Matricule : DK-203654 <br>
                    Numero : 77 852 23 25
                  </a>
                </div>
              </div>
              <div class="col-lg-4">
                  <div id="info">
                    <a href="">
                      Trajet : Dakar-Thies <br>
                      Heure de depart : 20h30</br>
                      Prix : 2000 FCFA <br>
                      Matricule : DK-203654 <br>
                      Numero : 77 852 23 25
                    </a>
                  </div>
              </div>
                <div class="col-lg-4">
                  <div id="info">
                    <a href="">
                      Trajet : Dakar-Thies <br>
                      Heure de depart : 20h30</br>
                      Prix : 2000 FCFA <br>
                      Matricule : DK-203654 <br>
                      Numero : 77 852 23 25
                    </a>
                  </div>
                </div>
           </div>

           <div class="row">
            <div class="col-lg-4">
              <div id="info">
                <a href="">
                  Trajet : Dakar-Thies <br>
                  Heure de depart : 20h30</br>
                  Prix : 2000 FCFA <br>
                  Matricule : DK-203654 <br>
                  Numero : 77 852 23 25
                </a>
              </div>
            </div>
            <div class="col-lg-4 center">
                <div id="info">
                  <a href="">
                    Trajet : Dakar-Thies <br>
                    Heure de depart : 20h30</br>
                    Prix : 2000 FCFA <br>
                    Matricule : DK-203654 <br>
                    Numero : 77 852 23 25
                  </a>
                </div>
            </div>
              <div class="col-lg-4">
                <div id="info">
                  <a href="">
                    Trajet : Dakar-Thies <br>
                    Heure de depart : 20h30</br>
                    Prix : 2000 FCFA <br>
                    Matricule : DK-203654 <br>
                    Numero : 77 852 23 25
                  </a>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div id="info">
                <a href="">
                  Trajet : Dakar-Thies <br>
                  Heure de depart : 20h30</br>
                  Prix : 2000 FCFA <br>
                  Matricule : DK-203654 <br>
                  Numero : 77 852 23 25
                </a>
              </div>
            </div>
            <div class="col-lg-4">
                <div id="info">
                  <a href="">
                    Trajet : Dakar-Thies <br>
                    Heure de depart : 20h30</br>
                    Prix : 2000 FCFA <br>
                    Matricule : DK-203654 <br>
                    Numero : 77 852 23 25
                  </a>
                </div>
            </div>
              <div class="col-lg-4 carton">
              <div id="info">
                <a href="{{ route('admin_auth')}}">
                  Trajet : Dakar-Thies <br>
                  Heure de depart : 20h30</br>
                  Prix : 2000 FCFA <br>
                  Matricule : DK-203654 <br>
                  Numero : 77 852 23 25
                  </a>
                </div>
              </div>
      </div>
      
        </div>
        <div class="footer">
          <p> <span> SamaAuto </span> votre agence qui garentit ton voyager le plus loin possible.Avec une efficacite et fiabilite hors norme.<br>
              le choix de samaAuto est l'assurance d'un voyage en toute serenite.</p>
          <div class="contact"> Nos Contacts :</div>
          <div class="row flex-row-reverse">
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="" data-original-title="Like us on Facebook">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
                <i class="fab fa-twitter-square"></i>
              </a>
              <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="" data-original-title="Star us on Github">
                <i class="fab fa-github"></i>
              </a>
          </div>
              <div class="copy">
                &copy; 2020 <a href="" class="ml-1" target="_blank">SetupEnterprise</a>  work in web and design
              </div>
      </div>
    </body>
</html>
