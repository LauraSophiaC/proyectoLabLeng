<?php
 	class ControlPagina {

    	var $objPagina;

    function __construct($objPagina) {
        $this->objPagina = $objPagina;
    }

    function guardar() {
        $id = $this->objPagina->getId();
        $title =$this->objPagina->getTitle();
        $name =$this->objPagina->getName();
        $comandoSQL = "INSERT INTO pagina(id,title, name) VALUES('" . $id . "','" . $title . "','" . $name . "')";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function modificar() {
        $id = $this->objPagina->getId();
        $title =$this->objPagina->getTitle();
        $name =$this->objPagina->getName();
        $comandoSQL = "UPDATE pagina SET title = '" . $title . "', name = '" . $name . "' where ID = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }
   	
    function borrar() {
        $id = $this->objPagina->getId();
        $comandoSQL = "DELETE FROM pagina WHERE id = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function consultar() {
        $id = $this->objPagina->getId();
        $comandoSQL = "SELECT * FROM pagina WHERE id = '".$id."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
        if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
            $this->objPagina->setTitle($row["title"]);
            $this->objPagina->setName($row["name"]);
        }
        $objControlConexion->cerrarBd();

        return $this->objPagina;
        }

    }
?>