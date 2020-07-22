<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of canton
 *
 * @author Gabriel Barboza Carvajal .
 */
//include './modelo/division.php';
//include './modelo/distrito.php';
class canton extends division{
    
    public $distritos;
    
    public function __construct($num,$nom) {
        parent::__construct($num,$nom);
        
    }
    
    public function agregarCantones($distritos)
    {
        $this->distritos= $distritos;
    }
    
    public function mostrar()
    {
        echo '<br>' . $this->getNombre() . "|" . $this->getNumero() .'<br>' . print_r($distritos);
    }
    
}
