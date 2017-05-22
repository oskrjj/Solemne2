<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author CETECOM
 */
class Usuario {
   
    private $email;
    private $password;
    
    function __construct() {
        
    }
  
  

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }



}
