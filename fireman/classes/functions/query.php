<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of query
 *
 * @author rostom
 */
class query {
    //put your code here
    public $_data = array();


    public function __construct() {
       
    }
    
    public function GetAllData(){
        $this->_data["hello"] =" hi";
    }
    public function SetAllData(){
        
        return $this->_data;
    }
}
