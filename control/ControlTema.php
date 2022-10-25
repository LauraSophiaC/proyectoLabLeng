<?php
 	class ControlTema {

    	var $objTema;

    function __construct($objTema) {
        $this->objTema = $objTema;
    }

    function guardar() {
        $id = $this->objTema->getId();
        $nombre =$this->objTema->getNombre();
        $descripcion =$this->objTema->getDescripcion();
        $comandoSQL = "INSERT INTO TEMA(id,nombre,descripcion) VALUES('" . $id . "','" . $nombre . "','" . $descripcion . "')";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function modificar() {
        $id = $this->objTema->getId();
        $nombre =$this->objTema->getNombre();
        $descripcion =$this->objTema->getDescripcion();
        $comandoSQL = "UPDATE TEMA SET NOMBRE = '".$nombre."', DESCRIPCION = '".$descripcion."' where ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }
   	
    function borrar() {
        $id = $this->objTema->getId();
        $comandoSQL = "DELETE FROM TEMA WHERE ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function consultar() {
        $id = $this->objTema->getId();
        $comandoSQL = "SELECT * FROM TEMA WHERE ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
        if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
            $this->objTema->setNombre($row["NOMBRE"]);
            $this->objTema->setDescripcion($row["DESCRIPCION"]);
        }
        $objControlConexion->cerrarBd();

        return $this->objTema;
        }

    }
?>