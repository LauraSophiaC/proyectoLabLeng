<?php
session_start();
include "../modelo/Usuario.php";
include "../control/ControlUsuario.php";
include "../control/ControlConexion.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <h1 ></h1>
  <nav> <ul class="menu-general center-block">
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="../index.php">Inicio</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="gestor.php">Gestor contenido</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="#">Contáctanos</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="#">Acerca de</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="cerrarSesion.php">Cerrar sesión</a></li>
</ul>
</nav>
  <title>Isla del Lenguaje</title>
<style >
    .menu-general {
     margin: 8px;
     padding: 0;
     text-align: center;
     }

    .menu-general li{
    list-style-type: none;
    color: dark;
    font-size: 1.1em;
    background: #D6784A;
    text-align: center;
    padding: 7px;
    }

    nav > .menu-general a {
    color: white;
    -moz-border-radius: none;
    -webkit-border-radius: none;
    }

    nav > .menu-general a:hover {
    color: dark;
    font-family: verdana;
    -moz-border-radius: none;
    -webkit-border-radius: none;
    }

    nav > .menu-general a:link {
    color: dark;
    font-family: verdana;
    text-decoration: none;
    -moz-border-radius: none;
    -webkit-border-radius: none;
    }

    nav > .menu-general a:visited {
    color: dark;
    font-family: verdana;
    -moz-border-radius: none;
    -webkit-border-radius: none;
    }

    .flex-center{
    display: flex;
    justify-content:center;
    align-items: center;

    }

</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid border-3 w-100 p-1 bg-dark text-white text-center">
  <h1 class="display-1" >ISLA LENGUAJE</h1>
  <p>Aun trabajamos en ello, pero ¡hecha un vitazo a la isla!</p> 

  <img src="../Wide01.png" usemap="#image-map">

  <div class="IslaLenguaje">
    <map name="image-map" >
    <area target="" alt="Tres Cerditos" title="Tres Cerditos" href="http://localhost/proyectoLabLeng/vista/cerditos.php" coords="660,200,123" shape="circle">
    <area target="" alt="Merlin" title="Merlin" href="http://localhost/proyectoLabLeng/vista/merlin.php" coords="416,254,124" shape="circle">
    <area target="" alt="Taller" title="Taller" href="http://localhost/proyectoLabLeng/vista/taller.php" coords="654,449,111" shape="circle">
    <area target="" alt="Alicia" title="Alicia" href="http://localhost/proyectoLabLeng/vista/alicia.php" coords="874,331,90" shape="circle">
    <area target="" alt="Tortuga y Liebre" title="Tortuga y Liebre" href="http://localhost/proyectoLabLeng/vista/tortugaliebre.php" coords="445,461,79" shape="circle">
</map>
</div>
</div>
</body>
</html>