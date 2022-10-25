<?php
 	class ControlPaginaCompetencia {

    	var $objPaginaCompetencia;

    function __construct($objPaginaCompetencia) {
        $this->objPaginaCompetencia = $objPaginaCompetencia;
    }

    function guardar() {
        $fkIdPagina = $this->objPaginaCompetencia->getFkIdPagina();
        $fkIdCompetencia =$this->objPaginaCompetencia->getFkIdCompetencia();
        $comandoSQL = "INSERT INTO paginacompetencia(fkIdPagina, fkIdCompetencia) VALUES('" . $fkIdPagina . "','" . $fkIdCompetencia . "')";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function modificar() {
        $fkIdPagina = $this->objPaginaCompetencia->getFkIdPagina();
        $fkIdCompetencia =$this->objPaginaCompetencia->getFkIdCompetencia();
        $comandoSQL = "UPDATE paginacompetencia SET fkIdCompetencia = '" . $fkIdCompetencia . "' where fkIdPagina = '".$fkIdPagina."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }
   	
    function borrar() {
        $fkIdPagina = $this->objPaginaCompetencia->getFkIdPagina();
        $comandoSQL = "DELETE FROM paginacompetencia WHERE fkIdPagina = '".$fkIdPagina."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function consultar() {
        $fkIdPagina = $this->objPaginaCompetencia->getFkIdPagina();
        $comandoSQL = "SELECT * FROM paginacompetencia WHERE fkIdPagina = '".$fkIdPagina."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdflenguaje", 3306);
        $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
        if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
            $this->objPaginaCompetencia->setfkIdPagina($row["fkIdPagina"]);
            $this->objPaginaCompetencia->setfkIdCompetencia($row["fkIdCompetencia"]);
        }
        $objControlConexion->cerrarBd();

        return $this->objPagina;
        }

    }
?>