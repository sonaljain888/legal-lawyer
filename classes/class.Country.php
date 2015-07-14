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
class Country {
//put your code here
    public $country_id = null;
    public $country_name = null;

    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
    public function tableName(){
        return "country";
    }
    
    public function getAll(){
        $db = new Db();
        $query = "SELECT * FROM ".$this->tableName()." WHERE active = 1";
        return $db->select($query);
    }
    
    public function getName(){
        if(is_numeric($this->country_id)){
            $db = new Db();
            $id = $db->quote($this->country_id);
            $query = "SELECT * FROM ".$this->tableName()." WHERE active = 1 AND id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    
    public function save(){
        
    }
}
