<?php
error_reporting(0);
session_start();
include "../modelo/Tipo.php";
include "../control/ControlTipo.php";
include "../control/ControlConexion.php";
$id=$_POST["txtId"];
$descripcion=$_POST["txtDescripcion"];
$formato=$_POST["txtFormato"];
$bot=$_POST["btn"];
switch ($bot) {
  case 'Guardar':
    $objTipo=new Tipo($id, $descripcion, $formato);
    $objControlTipo=new ControlTipo($objTipo);
    $objControlTipo->guardar();
    break;
  case 'Consultar':
        $objTipo = new Tipo($id,"" , "");
        $objControlTipo = new ControlTipo($objTipo);
        $objTipo = $objControlTipo->consultar();
        $id = $objTipo->getId();
        $descripcion = $objTipo->getDescripcion();
        $formato = $objTipo->getFormato();
    break;
  case 'Modificar':
    $objTipo=new Tipo($id, $descripcion, $formato);
    $objControlTipo=new ControlTipo($objTipo);
    $objControlTipo->modificar();
    break;
  case 'Borrar':
    $objTipo=new Tipo($id,"" , "");
    $objControlTipo=new ControlTipo($objTipo);
    $objControlTipo->borrar();
    break;
  default:
    # code...
    break;
}

echo '
<!DOCTYPE html>
<html>
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       <title>LengLab USBMED</title>
       <style >
.container {
  margin: 0;

   object-fit: cover;
   padding-top: 0px;
   padding-bottom: 0px;
   font-size:24px; 
}
.xd .xdGuardar{
  width: 92px;
  font-size: 17px;
  padding: 12px;
}
.xd .xdConsultar{
  width: 92px;
  font-size: 17px;
  padding: 12px;
}
.xd .xdModificar{
  width: 92px;
  font-size: 17px;
  padding: 12px;
}
.xd .xdBorrar{
  width: 92px;
  font-size: 17px;
  padding: 12px;
}
  </style>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
         integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="">
       <link rel="stylesheet" href="login.css">
   </head>
   <body>
        <div class="container">
            
           <div class="row text-center login-page">
               <header>
               <div class="box-usb-logo">
                  <img src="usblogo.png" width="400px">
               </div>
               </header>
               <div class="col-md-12 container">
    <form class="xd" method="post" action="gestorC.php">
      <table border="2" width="100%">
        <tr>
          <td colspan="2" align="center">Contenido</td>
        </tr>
        <tr>
          <td width="1000px">Identificador</td>
          <td><input type="text" name="txtId" value="'.$id.'"></td>
        </tr>
        <tr>
          <td>Descripcion</td>
          <td><input type="text" name="txtDescripcion" value="'.$descripcion.'"></td>
        </tr>
        <tr>
          <td>Formato</td>
          <td><input type="text" name="txtFormato" value="'.$formato.'"></td>
        </tr>

      </table>
      <table>
        <tr>
          <td>
            <input class="xdGuardar" type="submit" name="btn" value="Guardar">
          </td>
          <td>
            <input class="xdConsultar" type="submit" name="btn" value="Consultar">
          </td>
          <td>
            <input class="xdModificar" type="submit" name="btn" value="Modificar">
          </td>
          <td>
            <input class="xdBorrar" type="submit" name="btn" value="Borrar">
          </td>
        </tr>
      </table>
    </form>
   </div>
         </div>
         </div>
   </body>
</html>';
?>