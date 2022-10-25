<!DOCTYPE html>
<html lang="en">
<head>
  <h1 ></h1>
  <nav> <ul class="menu-general center-block">
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="FrmUsuario.php">Inicio</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="gestorC.php">Gestor contenido</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="#">Contáctanos</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="#">Acerca de</a></li>
<li class="col-md-2 col-sm-2 col-xs-12 btn"><a href="cerrarSesion.php">Cerrar sesión</a></li>
</ul>
</nav>
  <title>Los tres cerditos</title>
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


    #contenedor_principal{
    width:1024px;
    height:auto;
    position:relative;
    margin:auto;
    }
    .contenedor_Casitas{
    width:335px;
    height:auto;
    position:relative;
    display:inline-block;
    vertical-align:top;
    overflow:hidden;
    }
    .imagen, .texto{
    width:100%;
    height:auto;
    position:relative;
    display:inline;
    }
    .texto{
    height:auto;
    text-align:center;

    }

</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid border-3 w-100 p-1 bg-dark text-white text-center">
  <h1 class="display-1" >LOS TRES CERDITOS</h1>
  <p>¡Hecha un vistazo a nuestras guias de lenguaje!</p> 

  <img src="../3LittlePigs.png" usemap="#image-map">

<map name="image-map">
    <area target="" alt="Casa Paja" title="Casa Paja" href="http://localhost/proyectoLabLeng/vista/cerditos_casaPaja.php" coords="911,465,975,492,1063,471,1051,153,844,144,938,363,911,356" shape="poly">
    <area target="" alt="Casa Ladrillo" title="Casa Ladrillo" href="http://localhost/proyectoLabLeng/vista/cerditos_casaLadrillo.php" coords="602,357,614,539,704,542,898,514,913,350,842,160,531,156,486,246" shape="poly">
    <area target="" alt="Casa Madera" title="Casa Madera" href="http://localhost/proyectoLabLeng/vista/cerditos_casaMadera.php" coords="256,566,244,379,213,408,335,156,407,136,584,363,542,391,553,546" shape="poly">
</map>

</div>



</body>
</html>