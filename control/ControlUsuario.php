<?php
class ControlUsuario {

    	var $objUsuario;

    function __construct($objUsuario) {
        $this->objUsuario = $objUsuario;
    }
    function validarIngreso() {
    	$esValido=false;
        $username = $this->objUsuario->getUsername();
        $password = $this->objUsuario->getPassword();
        $comandoSQL = "SELECT * FROM Usuario WHERE username = '".$username."' and password = '".$password."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
        if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
            $esValido=true;
        }
        $objControlConexion->cerrarBd();

        return $esValido;
        }
   }
?>