<?php
 	class ControlPaginaRa {

    	var $objPaginaRa;

    function __construct($objPaginaRa) {
        $this->objPaginaRa = $objPaginaRa;
    }

    function guardar() {
        $fkIdPagina = $this->objPaginaRa->getFkIdPagina();
        $fkIdRa =$this->objPaginaRa->getFkIdRa();
        $comandoSQL = "INSERT INTO PaginaRa(fkIdPagina, fkIdRa) VALUES('" . $fkIdPagina . "','" . $fkIdRa . "')";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function modificar() {
        $fkIdPagina = $this->objPaginaRa->getFkIdPagina();
        $fkIdRa =$this->objPaginaRa->getFkIdRa();
        $comandoSQL = "UPDATE PaginaRa SET fkIdRa = '" . $fkIdRa . "' where fkIdPagina = '".$fkIdPagina."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }
   	
    function borrar() {
        $fkIdPagina = $this->objPaginaRa->getFkIdPagina();
        $comandoSQL = "DELETE FROM PaginaRa WHERE fkIdPagina = '".$fkIdPagina."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdlenguaje", 3306);
        $objControlConexion->ejecutarComandoSql($comandoSQL);

        $objControlConexion->cerrarBd();
    }

    function consultar() {
        $fkIdPagina = $this->objPaginaRa->getFkIdPagina();
        $comandoSQL = "SELECT * FROM PaginaRa WHERE fkIdPagina = '".$fkIdPagina."'";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBD("localhost", "root", "", "bdflenguaje", 3306);
        $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
        if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
            $this->objPaginaCompetencia->setfkIdPagina($row["fkIdPagina"]);
            $this->objPaginaCompetencia->setfkIdCompetencia($row["fkIdRa"]);
        }
        $objControlConexion->cerrarBd();

        return $this->objPagina;
        }

    }
?>