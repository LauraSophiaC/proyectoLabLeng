<?php
 	class ControlPaginaTema {

    	var $objPaginaTema;

    function __construct($objPaginaTema) {
        $this->objPaginaTema = $objPaginaTema;
    }

    function guardar() {
        $fkIdPagina = $this->objPaginaTema->getFkIdPagina();
        $fkIdTema =$this->objPaginaTema->getFkIdTema();
        $comandoSQL = "INSERT INTO PaginaTema(fkIdPagina, fkIdTema) VALUES('" . $fkIdPagina . "','" . $fkIdTema . "')";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function modificar() {
        $fkIdPagina = $this->objPaginaTema->getFkIdPagina();
        $fkIdTema =$this->objPaginaTema->getFkIdTema();
        $comandoSQL = "UPDATE PaginaTema SET fkIdTema = '" . $fkIdTema . "' where fkIdPagina = '".$fkIdPagina."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }
   	
    function borrar() {
        $fkIdPagina = $this->objPaginaCompetencia->getFkIdPagina();
        $comandoSQL = "DELETE FROM paginaTema WHERE fkIdPagina = '".$fkIdPagina."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function consultar() {
        $fkIdPagina = $this->objPaginaTema->getFkIdPagina();
        $comandoSQL = "SELECT * FROM PaginaTema WHERE fkIdPagina = '".$fkIdPagina."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdflenguaje", 3306);
        $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
        if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
            $this->objPaginaCompetencia->setfkIdPagina($row["fkIdPagina"]);
            $this->objPaginaCompetencia->setfkIdCompetencia($row["fkIdTema"]);
        }
        $objControlConexion->cerrarBd();

        return $this->objPagina;
        }

    }
?>