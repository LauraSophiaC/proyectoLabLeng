<?php
    class Pagina {
        var $id;
        var $title;
        var $name;
        

    function __construct($id, $title, $name) {
        $this->id = $id;
        $this->title = $title;
        $this->name = $name;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getTitle() {
        return $this->title;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
}

?>