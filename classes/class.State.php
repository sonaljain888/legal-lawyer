<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of class
 *
 * @author anjain
 */
class State extends Country {
//put your code here
    public $state_id = null;
    public $state_name = null;

    public function tableName(){
        return "states";
    }
    
     public function getName(){
        if(is_numeric($this->state_id)){
            $db = new Db();
            $id = $db->quote($this->state_id);
            $query = "SELECT id FROM ".$this->tableName()." WHERE active = 1 AND id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    
    public function save(){
        
    }
}
