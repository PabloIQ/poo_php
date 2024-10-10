<?php
class Cliente {
    private $nombre;

    PUBLIC function __construct($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getnombre() {
        return $this->nombre;
    }
}
?>