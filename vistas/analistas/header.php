<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SUIC | Sistema Unificado de Información Consolidada</title>
    <!-- Bootstrap core CSS -->
    <link href="../../public/css/bootstrap.css" rel="stylesheet">
    <link href="../../public/css/estilos.css" rel="stylesheet">

  </head>
  <body onload="startTime()">
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
          <div class="container">
              <div class="widget">
                <div class="reloj">
                  <p id="horas" class="horas"></p>
                  <p>:</p>
                  <p id="minutos" class="minutos"></p>
                  <p>:</p>
                  <div class="cajaSegundos">
                    <p id="segundos" class="segundos"></p>
                  </div>
                </div>
              </div>
              <div class="container">
              <div class="widget ">
            <div class="fecha ml-auto">
                  <p id="diaSemana" class="diaSemana"></p>
                  <p id="dia" class="dia"></p>
                  <p>de</p>
                  <p id="mes" class="mes"></p>
                  <p>del</p>
                  <p id="anio" class="anio"></p>
                </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <nav class="nav navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img class="logo" src="../../public/images/suic.png" alt="suic" width="90px" height="30px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Recaudo</a></li>
            <li><a href="#">Marcadas</a></li>
            <li><a href="#">Reportes</a></li>
            <li><a href="#">Consolidados</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Bienvenido, John Andrade</a></li>
            <li><a href="#">Salir</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>