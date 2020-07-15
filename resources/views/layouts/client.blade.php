<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
    <title>{{$title ?? '' }}SamaAuto</title>
      <base href="/">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="<?php echo asset('css/bootstrap.min.css')?>" rel="stylesheet">
      <link href="<?php echo asset('css/header.component.css')?>" rel="stylesheet">
      <link href="<?php echo asset('css/home.component.css')?>" rel="stylesheet">
    </head>
    <body>
            <nav>
              <span class="gauchelog">
                      <p>SAMA AUTO</p>
              </span>
              <span class="droitelog">
                      <a href="#">Se connecter</a>
              </span>
                    <!--<a href="#" id="icon"><img src="../../image/plogo.png" width="50rem" height="50rem"/></a>-->
                      <ul class="ulnave">
                        <li><a href="#">Points de vente</a></li>
                        <li><a href="{{ route('billetForm') }}">Acheter billet</a></li>
                        <li><a href="#">Les lignes</a></li>
                        <li><a href="{{ route('gerant.auth') }}">Gérant</a></li>
                        <li><a href="{{ route('admin_auth') }}">Administrateur</a></li>
                      </ul>

            </nav>
            <div id="bande">
                  <div id="logo">
                    <img id="image" src="<?php echo asset('img/samaautosloganjb1logo.png')?>" width="10%" />
                  </div>
                  <div id="recherche">
                    <form >
                         <table id='tabsaisi' >
                            <tr bordercolor='silver'>
                                <td>
                                  <input type='text' name='login' required />
                                </td>
                                <td>
                                  <input type='text' name='login' required />
                                </td>
                                <td>
                                     <button type="submit" class="btn btn-success">rechercher</button>
                                </td>
                              </tr>
                           </table>
                     </form>
                  </div>
            </div>
            <div class="container">

              @yield('content')


            </div>
    </body>
</html>
