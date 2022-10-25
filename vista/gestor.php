<?php
//error_reporting(0);
session_start();
include "../modelo/Pagina.php";
include "../control/ControlPagina.php";
include "../control/ControlConexion.php";
if(isset($_POST["txtId"]))$id=$_POST["txtId"]; //isset = para validar datos
if(isset($_POST["txtTitle"]))$title=$_POST["txtTitle"];
if(isset($_POST["txtName"]))$name=$_POST["txtName"];
if(isset($_POST["btn"]))$bot=$_POST["btn"];
switch ($bot) { //condicional multiple
  case 'Guardar':
    $objPagina=new Pagina($id, $title, $name);
    $objControlPagina=new ControlPagina($objPagina);
    $objControlPagina->guardar();
    break;
  case 'Consultar':
        $objPagina = new Pagina($id,"" , "");
        $objControlPagina = new ControlPagina($objPagina);
        $objPagina = $objControlPagina->consultar();
        $id = $objPagina->getId();
        $title = $objPagina->getTitle();
        $name = $objPagina->getName();
    break;
  case 'Modificar':
    $objPagina=new Pagina($id, $title, $name);
    $objControlPagina=new ControlPagina($objPagina);
    $objControlPagina->modificar();
    break;
  case 'Borrar':
    $objPagina=new Pagina($id,"" , "");
    $objControlPagina=new ControlPagina($objPagina);
    $objControlPagina->borrar();
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
    <form class="xd" method="post" action="gestor.php">
      <table border="2" width="100%">
        <tr>
          <td colspan="2" align="center">Contenido</td>
        </tr>
        <tr>
          <td width="1000px">Codigo</td>
          <td><input type="text" name="txtId" value="'.$id.'"></td>
        </tr>
        <tr>
          <td>Título</td>
          <td><input type="text" name="txtTitle" value="'.$title.'"></td>
        </tr>
        <tr>
          <td>Nombre</td>
          <td><input type="text" name="txtName" value="'.$name.'"></td>
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