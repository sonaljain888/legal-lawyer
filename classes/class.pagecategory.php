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
class PageCategory
{
    public $id = null;
    public $name = null;
      public $url = null;
    public $pagecategory_status = null;

    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
    public function table(){
        return "page_category";
    }
    
    public function getAll(){
        $db = new Db();
        $query = "SELECT * FROM ".$this->table();
        return $db->select($query);
    }
    
    public function getName(){
        if(is_numeric($this->id)){
            $db = new Db();
            $id = $db->quote($this->id);
            $query = "SELECT * FROM ".$this->table()." WHERE id = ".$id;
            return $db->select($query);
        }
        return false;
    }
      public function save(){
//        if(is_numeric($this->id) && is_string($this->name)){
            $db = new Db();
//            $id = $db->quote($this->id);
            $name = $db->quote($this->name);
             $url = $db->quote($this->url);
            $active = $db->quote($this->pagecategory_status);
            $query = "INSERT INTO ".$this->table()." (name,url, active) VALUES($name,$url , $active) 
                ON DUPLICATE KEY UPDATE    
                name= $name, active=$active";
            if($db->query($query)){
                if($db->affectedRows()){
                    return true;
                }
            }
//        }
        return false;
    }
}

?>
