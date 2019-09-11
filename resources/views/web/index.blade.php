@extends('layout.home')

@section('content')

  <!-- Simple splash screen-->
  <div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Dieciocho Oval</h1><p>Cargando</p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
  <!--[if lt IE 7]>
  <p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <!-- Header -->
  <nav class="navbar navbar-default navbar-fixed-top">
          <div class="logo">
              <img src="images/logo_oval18.png" class="img" alt="logo oval">
          </div>
  </nav>

  <!-- Main Wrapper -->
  <div id="wrapper">
    <div class="normalheader transition animated fadeIn">
      <div class="hpanel">
        <div class="panel-body">
          <h2>
            <strong>Resultados</strong> Actuales
          </h2>
        </div>
      </div>
    </div>
    <div class="content animate-panel">
      <div class="row">
        <div class="col-md-3">
          <div class="hpanel hbggreen">
            <div class="panel-body">
              <div class="text-center">
                <h3>
                  1. <strong>ALIANZA VERDE</strong>
                </h3>
                <p class="text-big font-light">
                  <strong>0</strong>
                </p>
                <h3>
                  <strong>PUNTOS</strong>
                </h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hpanel hbgred">
            <div class="panel-body">
              <div class="text-center">
                <h3>
                  2. <strong>ALIANZA ROJA</strong>
                </h3>
                <p class="text-big font-light">
                  <strong>0</strong>
                </p>
                <h3>
                  <strong>PUNTOS</strong>
                </h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hpanel hbgorange">
            <div class="panel-body">
              <div class="text-center">
                <h3>
                  3. <strong>ALIANZA NARANJA</strong>
                </h3>
                <p class="text-big font-light">
                  <strong>0</strong>
                </p>
                <h3>
                  <strong>PUNTOS</strong>
                </h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hpanel hbggray">
            <div class="panel-body">
              <div class="text-center">
                <h3>
                  4. <strong>ALIANZA GRIS</strong>
                </h3>
                <p class="text-big font-light">
                  <strong>0</strong>
                </p>
                <h3>
                  <strong>PUNTOS</strong>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="normalheader transition animated fadeIn">
      <div class="hpanel">
        <div class="panel-body">
          <h2>
            <strong>Competencias</strong> y <strong>Puntajes</strong>
          </h2>
        </div>
      </div>
    </div>
    <div class="content animate-panel">
      <div class="row">
        <div class="col-lg-12">
          <div class="hpanel">
            <div class="panel-body">
              <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>COMPETENCIA</th>
                      <th>PRIMER LUGAR</th>
                      <th>SEGUNDO LUGAR</th>
                      <th>TERCER LUGAR</th>
                      <th>CUARTO LUGAR</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Silla Musical</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Toro Mecanico</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Martillo</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Rayuela</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Ensacados</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Concurso de baile</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Yincana</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>3 Pies</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Palo encebado</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                      <td>99999</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Vendor scripts -->
          <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
          <script src="{{asset('vendor/jquery-ui/jquery-ui.min.js')}}"></script>
          <script src="{{asset('vendor/slimScroll/jquery.slimscroll.min.js')}}"></script>
          <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
          <script src="{{asset('vendor/jquery-flot/jquery.flot.js')}}"></script>
          <script src="{{asset('vendor/jquery-flot/jquery.flot.resize.js')}}"></script>
          <script src="{{asset('vendor/jquery-flot/jquery.flot.pie.js')}}"></script>
          <script src="{{asset('vendor/flot.curvedlines/curvedLines.js')}}"></script>
          <script src="{{asset('vendor/jquery.flot.spline/index.js')}}"></script>
          <script src="{{asset('vendor/metisMenu/dist/metisMenu.min.js')}}"></script>
          <script src="{{asset('vendor/iCheck/icheck.min.js')}}"></script>
          <script src="{{asset('vendor/peity/jquery.peity.min.js')}}"></script>
          <script src="{{asset('vendor/sparkline/index.js')}}"></script>

          <!-- App scripts -->
          <script src="{{asset('scripts/homer.js')}}"></script>
          <script src="scripts/charts.js')}}"></script>

          <script>

          $(function () {

            /**
            * Flot charts data and options
            */
            var data1 = [ [0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51] ];
            var data2 = [ [0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59] ];

            var chartUsersOptions = {
              series: {
                splines: {
                  show: true,
                  tension: 0.4,
                  lineWidth: 1,
                  fill: 0.4
                },
              },
              grid: {
                tickColor: "#f0f0f0",
                borderWidth: 1,
                borderColor: 'f0f0f0',
                color: '#6a6c6f'
              },
              colors: [ "#62cb31", "#efefef"],
            };

            $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

            /**
            * Flot charts 2 data and options
            */
            var chartIncomeData = [
              {
                label: "line",
                data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
              }
            ];

            var chartIncomeOptions = {
              series: {
                lines: {
                  show: true,
                  lineWidth: 0,
                  fill: true,
                  fillColor: "#64cc34"

                }
              },
              colors: ["#62cb31"],
              grid: {
                show: false
              },
              legend: {
                show: false
              }
            };

            $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);

          });

        </script>
@endsection
