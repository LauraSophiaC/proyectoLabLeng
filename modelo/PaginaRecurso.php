<?php
    class PaginaRecurso {
        var $fkIdPagina;
        var $fkIdRecurso;
        

    function __construct($fkIdPagina, $fkIdRecurso) {
        $this->fkIdPagina = $fkIdPagina;
        $this->fkIdRecurso = $fkIdRecurso;

    }

    function getFKIdPagina() {
        return $this->fkIdPagina;
    }

    function setFKIdPagina($fkIdPagina) {
        $this->fkIdPagina = $fkIdPagina;
    }

    function getFKIdRecurso() {
        return $this->fkIdRecurso;
    }

    function setFKIdRecurso($fkIdRecurso) {
        $this->fkIdRecurso = $fkIdRecurso;
    }

}

?>