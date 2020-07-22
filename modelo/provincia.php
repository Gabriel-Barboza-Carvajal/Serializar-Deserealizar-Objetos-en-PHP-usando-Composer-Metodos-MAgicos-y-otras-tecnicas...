<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of provincia
 *
 * @author Gabriel Barboza Carvajal .
 */
include './modelo/distrito.php';
class provincia extends division{
    
    public $cantones;
    
    public function __construct($num,$nom) {        
        parent::__construct($num, $nom);
    }
    

    
}
