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
class Page {
    public $data = array();
    public  function getPageDetails(){
        $db = new Db();
        $where = "";
        if(isset($this->data['url'])){
            $where.= " AND url = ".$db->quote($this->data['url']) ;
        }
        if(isset($this->data['category_id'])){
            $where.= " AND category_id = ".$db->quote($this->data['category_id']) ;
        }
        $query = "SELECT * FROM ".$this->pageTableName(). " WHERE active = 1  ".$where;
        return $db->select($query);
    }
    
    private function pageTableName(){
        return "pages";
    }
    
    private function pageCategoryTableName(){
        return "page_category";
    }
    
    public function set($key, $val){
        $this->data[$key] = $val;
    }
    
    public function getPageCategoryId($cat_name){
        $db = new Db();
        $cat_name = $db->quote($cat_name);
        $query = "SELECT id FROM ".$this->pageCategoryTableName()." WHERE url = $cat_name and active = 1";
        return $db->select($query);
    }
    
     public function getPageTypeUrl($page_type_id){
        $db = new Db();
        $page_type_id = $db->quote($page_type_id);
        $query = "SELECT url FROM ".$this->pageCategoryTableName()."  where id =  $page_type_id AND active = 1";
        $row = $db->select($query);
        if(count($row)){
            return $row[0]['url'];
        }
        return "";
    }
      public $page_id = null;
    public $name = null;
      public $url = null;
    public $top_description = null;
    public $bottem_description = null;
    public $Keyword = null;
    public $title = null;
    public $description = null;
//    public $author = null;
    public $date = null;
    public $modified_by = null;
    public $active = null;
//    public $access_type = null;
    public function get($key){
        return $this->$key;
    }
    
    public function setpage($key , $val){
        $this->$key = $val;
    }
    
    public function table(){
        return "pages";
    }
    
    public function getAllpage(){
        $db = new Db();
        $query = "SELECT * FROM ".$this->table();
        return $db->select($query);
    }
    
    public function getName(){
        if(is_numeric($this->page_id)){
            $db = new Db();
            $page_id = $db->quote($this->page_id);
            $query = "SELECT * FROM ".$this->table()." WHERE page_id = ".$page_id;
            return $db->select($query);
        }
        return false;
    }
      public function save(){
       
    }
}