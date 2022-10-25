<?php
session_start(); //variables de sesion null=cerrarsesion o invalid 
include "../modelo/Usuario.php";
include "../control/ControlUsuario.php";
include "../control/ControlConexion.php";
$usuario=$_POST["usuario"]; //captura los datos de los cuadros de texto
$password=$_POST["password"];
$btn=$_POST["login-btn"];
//echo "El nombre de usuario es: ".$usuario."<br>";
//echo "La contraseña es: ".$password;
$objUsuario=new Usuario($usuario,$password);//encapsula el us y la psw
$objControlUsuario=new ControlUsuario($objUsuario);
if ($btn=="Entrar"){
	if ($objControlUsuario->validarIngreso()==true){
		$_SESSION["usu"]=$usuario; //variable de sesion
		header("Location: gestor.php"); 
	}
	else {
		header("Location: login.php");
	}
}

?>
<!DOCTYPE html>
<html>
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       <title>LengLab USBMED</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
         integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="">
       <link rel="stylesheet" href="login.css">
   </head>
   <body>
      <a href="../index.html">Salir del sitio web</a> 
        <div class="container">
           <div class="row text-center login-page">
               <div class="box-usb-logo">
                  <img src="usblogo.png">
               </div>
               <div class="col-md-12 login-form">
                     <form action="login.php" method="post">            
                           <div class="row">
                              <div class="col-md-12 login-form-header">
                                 <p class="login-form-font-header">Iniciar <span>sesión</span><p>
                              </div>
                          </div>
                          <div class="row">
                             <div class="col-md-12 login-from-row">
                                <input type="text" name="usuario" id="usuario" class="form-control text-center p-3"
                                placeholder="Usuario" name="usuario">
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-md-12 login-from-row">
                                <input type="password" class="form-control text-center p-3" placeholder="Contraseña" name="password">
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-md-12 login-from-row">
                                <input type="submit" value="Entrar" class="btn btn-primary mt-3 w-100 p-2" name="login-btn">
                             </div>
                          </div>
                     </form>
                     <?php if(!empty($loginResult)){?>
				<div class="text-danger"><?php echo $loginResult;?></div>
				<?php }?>
               </div>
            </div>
         </div>
   </body>
</html>