<?php
abstract class Operation {
    // Attributs
    protected $nombre1;
    protected $nombre2;

    // Methode
    public function __construct($nombre1, $nombre2){
        $this-> nombre1 = $nombre1;
        $this-> nombre2 = $nombre2;
    }
    public function setNombre1($premierNombre){
        $this->nombre1 = $premierNombre;
    }
    public function getNombre1(){
        return $this->nombre1;
    }

    public function setNombre2($secondNombre){
        $this->nombre2 = $secondNombre;
    }
    public function getNombre2(){
        return $this->nombre2;
    }

    abstract public function operate();

    // Methode d'erreur
    // controle vide
    // controle division par 0
}
?>