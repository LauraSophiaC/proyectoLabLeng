<?php
 	class ControlRa {

    	var $objRa;

    function __construct($objRa) {
        $this->objRa = $objRa;
    }

    function guardar() {
        $id = $this->objRa->getId();
        $descripcion =$this->objRa->getDescripcion();
        $comandoSQL = "INSERT INTO RA(id,descripcion) VALUES('" . $id . "','" . $descripcion . "')";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function modificar() {
        $id = $this->objRa->getId();
        $descripcion =$this->objRa->getDescripcion();
        $comandoSQL = "UPDATE RA SET DESCRIPCION = '".$descripcion."' where ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }
   	
    function borrar() {
        $id = $this->objRa->getId();
        $comandoSQL = "DELETE FROM RA WHERE ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function consultar() {
        $id = $this->objRa->getId();
        $comandoSQL = "SELECT * FROM RA WHERE ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
        if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
            $this->objRa->setDescripcion($row["DESCRIPCION"]);
        }
        $objControlConexion->cerrarBd();

        return $this->objRa;
        }

    }
?>