<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of division
 *
 * @author Gabriel Barboza Carvajal .
 */
abstract class division  implements JsonSerializable{
    private $numero,$nombre;
    public function __construct($numero, $nombre) {
        $this->numero = $numero;
        $this->nombre = $nombre;
    }
    public function __destruct() {
        echo "<br>destruyendo obj general<br>";
    }
    public function getNumero() {
        return $this->numero;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function __serialize() {
        return ['número'=>$this->numero,'nombre'=> $this->nombre];
    }
    
    public function __unserialize(array $data) {
        $this->nombre=$data['nombre'];
        $this->numero=$data['número'];
    }

    abstract public function jsonSerialize();

}
