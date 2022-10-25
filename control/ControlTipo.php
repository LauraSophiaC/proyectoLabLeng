<?php
 	class ControlTipo {

    	var $objTipo;

    function __construct($objTipo) {
        $this->objTipo = $objTipo;
    }

    function guardar() {
        $id = $this->objTipo->getId();
        $descripcion =$this->objTipo->getDescripcion();
        $formato =$this->objTipo->getFormato();
        $comandoSQL = "INSERT INTO TIPO(id,descripcion,formato) VALUES('" . $id . "','" . $descripcion . "','" . $formato . "')";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function modificar() {
        $id = $this->objTipo->getId();
        $descripcion =$this->objTipo->getDescripcion();
        $formato =$this->objTipo->getFormato();
        $comandoSQL = "UPDATE TIPO SET DESCRIPCION = '".$descripcion."', formato = '".$formato."' where ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }
   	
    function borrar() {
        $id = $this->objTipo->getId();
        $comandoSQL = "DELETE FROM TIPO WHERE ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function consultar() {
        $id = $this->objTipo->getId();
        $comandoSQL = "SELECT * FROM TIPO WHERE ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
        if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
            $this->objTipo->setDescripcion($row["DESCRIPCION"]);
            $this->objTipo->setFormato($row["FORMATO"]);
        }
        $objControlConexion->cerrarBd();

        return $this->objTipo;
        }

    }
?>