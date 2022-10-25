<?php
 	class ControlRecurso {

    	var $objRecurso;

    function __construct($objRecurso) {
        $this->objRecurso = $objRecurso;
    }

    function guardar() {
        $id = $this->objRecurso->getId();
        $name =$this->objRecurso->getName();
        $fkTipo =$this->objRecurso->getFkTipo();
        $comandoSQL = "INSERT INTO RECURSO(id,name,fkTipo) VALUES('" . $id . "','" . $name . "','" . $fkTipo . "')";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function modificar() {
        $id = $this->objRecurso->getId();
        $name =$this->objRecurso->getName();
        $fkTipo =$this->objRecurso->getFkTipo();
        $comandoSQL = "UPDATE RECURSO SET NAME = '".$name."', FKTIPO = '".$fkTipo."' where ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }
   	
    function borrar() {
        $id = $this->objRecurso->getId();
        $comandoSQL = "DELETE FROM RECURSO WHERE ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function consultar() {
        $id = $this->objRecurso->getId();
        $comandoSQL = "SELECT * FROM RECURSO WHERE ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
        if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
            $this->objRecurso->setName($row["NAME"]);
            $this->objClientes->setFkTipo($row["FKTIPO"]);
        }
        $objControlConexion->cerrarBd();

        return $this->objRecurso;
        }

    }
?>