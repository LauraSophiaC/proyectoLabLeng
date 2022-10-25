<?php
session_start();
error_reporting(0);
include "modelo/Usuario.php";
include "control/ControlUsuario.php";
include "control/ControlConexion.php";
$username=$_POST["username"];
$password=$_POST["password"];
$btn=$_POST["login-btn"];
//echo "El nombre de usuario es: ".$username."<br>";
//echo "La contraseña es: ".$password;
$objUsuario=new Usuario($username,$password);
$objControlUsuario=new ControlUsuario($objUsuario);
if ($btn=="Entrar"){
	if ($objControlUsuario->validarIngreso()){
		$_SESSION["usu"]=$username;
		header("Location: FrmUsuario.php");
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
       <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   </head>
   <body >
      <header>
         <div class="row text-center">
            <div class="box-usb-logo">
               <img src="usblogo.png">
            </div>
         </div>
      </header>
      <form class="row" >
         <div class="row text-center box-usb-mapa"  >
            <img src="Wide01.png" width=500% >
         </div>
      </form>
      <aside>
        <div class="container">
           <div class="row text-center login-page">
               <div class="col-md-12 login-form">
                     <form action="vista/FrmUsuario.php" method="post">            
                           <div class="row">
                              <div class="col-md-12 login-form-aside">
                                 <p class="login-form-font-aside">Iniciar <span>sesión</span><p>
                              </div>
                          </div>
                          <div class="row">
                             <div class="col-md-12 login-from-row">
                             <input type="text" name="username" id="username" class="form-control text-center p-3"
                                placeholder="Usuario" name="username">
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-md-12 login-from-row">
                             <input type="password" class="form-control text-center p-3"
					placeholder="Contraseña" name="password">
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-md-12 login-from-row">
                             <input type="submit" value="Entrar"
					class="btn btn-primary mt-3 w-100 p-2" name="login-btn">
                             </div>
                          </div>
                     </form>
                      <?php if(!empty($loginResult)){?>
            <div class="text-danger"><?php echo $loginResult;?></div>
            <?php }?>
               </div>
            </div>
         </div>
      </aside>
      <footer>
         <div class="Direcciones">
            <div id="dnn_AddressesPane">
            <div class="DnnModule DnnModule-DNN_HTML DnnModule-412"><a name="412"></a>

               <div class="C_contenedor">
                  <div id="dnn_ctr412_CONTENTPANE" class="C_contenido"><!-- Start_Module_412 --><div id="dnn_ctr412_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
                     <div id="dnn_ctr412_HtmlModule_lblContent" class="Normal">
                        <div class="principal">
                           <div class="icons-wrapper">
                                 <i class="ri-instagram-line icon"></i>
                                 <i class="ri-facebook-circle-line icon"></i>
                                 <i class="ri-whatsapp-line icon"></i>
                           </div>

                           <div class="rwd_col3 Centrar"><span class="TxtPie2">• Medellín: San Benito: Carrera 56C N° 51-110 Centro • Bello: Calle 45 N° 61-40 Barrio Salento • Centro de Formación Avanzada Fray Juan Duns Scoto OFM.: Carrera 82C N° 30A-120 C.C. Los Molinos, Torre Ejecutiva, Piso 20<br>
                           • Armenia: Barrio Sesenta Casas - Carrera 23 N° 4-07 • Ibagué: Calle 17N° 2-57 Centro</span></div>

                           <div class="rwd_col3 Centrar">
                              <span class="TxtPie2">Dirección de correo electrónico exclusiva para notificaciones judiciales:
                                 <a href="mailto:notificaciones.judiciales@usbmed.edu.co"> notificaciones.judiciales@usbmed.edu.co</a>
                              </span>
                           </div>

                              <div class="reset">  </div>
                           </div>

                        </div>

                        </div><!-- End_Module_412 -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </body>
</html>