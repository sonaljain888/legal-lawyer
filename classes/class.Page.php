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
        $query = "SELECT * FROM ".$this->pageTableName(). " WHERE status = 1  ".$where;
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
        $query = "SELECT id FROM ".$this->pageCategoryTableName()." WHERE name = $cat_name";
        return $db->select($query);
    }
}