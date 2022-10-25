<?php
    class PaginaRa {
        var $fkIdPagina;
        var $fkIdRa;
        

    function __construct($fkIdPagina, $fkIdRa) {
        $this->fkIdPagina = $fkIdPagina;
        $this->fkIdRa = $fkIdRa;

    }

    function getFkIdPagina() {
        return $this->fkIdPagina;
    }

    function setFkIdPagina($fkidpagina) {
        $this->fkIdPagina = $fkIdPagina;
    }

    function getFkIdRa() {
        return $this->fkIdRa;
    }

    function setFkIdRa($fkIdra) {
        $this->fkIdRa = $fkIdRa;
    }

}

?>