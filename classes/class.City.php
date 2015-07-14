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
class City extends State {
//put your code here   
    public $city_id = null;
    public $city_name = null;

    public function tableName(){
        return "city";
    }
    
     public function getName(){
        if(is_numeric($this->city_id)){
            $db = new Db();
            $id = $db->quote($this->city_id);
            $query = "SELECT * FROM ".$this->tableName()." WHERE  id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    
    public function getAll() {
            $db = new Db();
            $query = "SELECT t1.id, t2.name as state_name, t1.name, t1.active FROM ".$this->tableName()." t1 LEFT JOIN ".parent::tableName()." t2 on t2.id = t1.state_id  ";
            return $db->select($query);
    }
    
    public function save(){
        
    }
}
