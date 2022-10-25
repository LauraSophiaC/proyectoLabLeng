<?php
    class PaginaCompetencia {
        var $fkIdPagina;
        var $fkIdCompetencia;
        

    function __construct($fkIdPagina, $fkIdCompetencia) {
        $this->fkIdPagina = $fkIdPagina;
        $this->fkIdCompetencia = $fkIdCompetencia;

    }

    function getFKIdPagina() {
        return $this->fkIdPagina;
    }

    function setFKIdPagina($fkIdPagina) {
        $this->fkIdPagina = $fkIdPagina;
    }

    function getFKIdCompetencia() {
        return $this->fkIdCompetencia;
    }

    function setFKIdCompetencia($fkIdCompetencia) {
        $this->fkIdCompetencia = $fkIdCompetencia;
    }

}

?>