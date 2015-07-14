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
            $query = "SELECT * FROM ".$this->tableName()." WHERE active = 1 AND id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    
    public function getAll() {
            $db = new Db();
            $query = "SELECT t1.id, t2.name as country_name, t1.name, t1.active FROM ".$this->tableName()." t1 LEFT JOIN ".parent::tableName()." t2 on t2.id = t1.country_id AND t2.active = 1 WHERE t1.active = 1 ";
            return $db->select($query);
    }
    
    public function save(){
        
    }
}
