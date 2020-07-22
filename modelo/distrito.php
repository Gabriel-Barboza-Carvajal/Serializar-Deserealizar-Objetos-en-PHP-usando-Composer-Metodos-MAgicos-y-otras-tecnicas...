<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of distrito
 *
 * @author Gabriel Barboza Carvajal .
 */
include './modelo/division.php';
class distrito extends division{
    
    private  $secuencia;
    
    public function __construct($num='',$nom='',$sec='') {
        parent::__construct($num, $nom);
        $this->secuencia=$sec;
    }
    
    public function getSecuencia() {
        return $this->secuencia;
    }

    public function setSecuencia($secuencia) {
        $this->secuencia = $secuencia;
        return $this;
    }

    public function __serialize() {
        return array_merge(parent::__serialize(),array('secuencia'=>$this->secuencia));
    }
    
    public function __unserialize(array $data) {
        
        $this->secuencia=$data['secuencia'];
        parent::__unserialize($data);
    }

    public function jsonSerialize() {
        return ['nombre'=> $this->getNombre(),
                'número'=> $this->getNumero(),
                'secuencia'=> $this->getSecuencia()
            ];
    }

}
