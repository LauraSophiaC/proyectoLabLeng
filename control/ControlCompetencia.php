<?php
 	class ControlCompetencia {

    	var $objCompetencia;

    function __construct($objCompetencia) {
        $this->objCompetencia = $objCompetencia;
    }

    function guardar() {
        $id = $this->objCompetencia->getId();
        $descripcion =$this->objCompetencia->getDescripcion();
        $comandoSQL = "INSERT INTO competencia(id,descripcion) VALUES('" . $id . "','" . $descripcion . "')";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function modificar() {
        $id = $this->objPaginaCompetencia->getId();
        $descripcion =$this->objPaginaCompetencia->getDescripcion();
        $comandoSQL = "UPDATE paginacompetencia SET descripcion = '".$descripcion."' where ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }
   	
    function borrar() {
        $id = $this->objCompetencia->getId();
        $comandoSQL = "DELETE FROM competencia WHERE id = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function consultar() {
        $id = $this->objCompetencia->getId();
        $comandoSQL = "SELECT * FROM competencia WHERE id = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdflenguaje", 3306);
        $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
        if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
            $this->objCompetencia->setNombre($row["descripcion"]);
        }
        $objControlConexion->cerrarBd();

        return $this->objCompetencia;
        }

    }
?>