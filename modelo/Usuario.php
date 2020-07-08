<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author yo
 */
class Usuario {
    private $username;
    private $pass;
    
    function __construct() {
        $username = "";
        $pass = "";
    }
    
    function getUsername(){
        return $this->username;
    }
    
    function getPass(){
        return $this->pass;
    }
    
    function setUsername($username){
        return $this->username = $username;
    }
    
    function setPass($pass){
        return $this->pass = $pass;
    }
}
