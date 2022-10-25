<?php
    class Recurso {
        var $id;
        var $name;
        var $fkTipo;

    function __construct($id, $name, $fkTipo) {
        $this->id = $id;
        $this->name = $name;
        $this->fkTipo = $fkTipo;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getFkTipo() {
        return $this->fkTipo;
    }

    function setFkTipo($fkTipo) {
        $this->fkTipo = $fkTipo;
    }
}

?>