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
class Menu {
    public static function getMenus($access_type,$category_name){
        return self::_init($access_type,$category_name);
    }
    
    private static function _init($access_type,$category_name){
        $access_id = $category_id = 0;
        if(!strlen($access_type)){
            Error::set(MISSING_ACCESS_TYPE);
            return false;
        }else{
            $access_id = self::getAccessTypeId($access_type);
            if(!$access_id){
                Error::set(NOT_MATCHING_ACCESS_TYPE);
                return false;
            }
        }
        if(!strlen($category_name)){
            Error::set(MISSING_CATEGORY_NAME);
            return false;
        }else{
            $category_id = self::getCategoryId($category_name);
            if(!$category_id){
                Error::set(NOT_MATCHING_CATEGORY_NAME);
                return false;
            }
        }
        if($category_id && $access_id){
            $db = new Db();
            $category_id = $db->quote($category_id);
            $access_id = $db->quote($access_id);
            $query = "SELECT * FROM menu where category_id = $category_id AND access_type = $access_id AND active = 1 order by menu_order ASC";
            return $db->select($query);
        }
        return false;
    }
    
    private static function getAccessTypeId($access_type){
        $db = new Db();
        $access_type = $db->quote($access_type);
        $query = "SELECT * FROM access_type where type =  $access_type AND active = 1";
        $row = $db->select($query);
        if(count($row)){
            return $row[0]['id'];
        }
        return 0;
    }
    private static function getCategoryId($category_name){
        $db = new Db();
        $category_name = $db->quote($category_name);
        $query = "SELECT * FROM menu_category where name =  $category_name and active = 1";
        $row = $db->select($query);
        if(count($row)){
            return $row[0]['id'];
        }
        return 0;
    }
    
    public static function getMenuSubUrl($name){
        $db = new Db();
        $name = $db->quote($name);
        $query = "SELECT * FROM page_category where name = $name and active = 1";
        $row = $db->select($query);
        if(count($row) && $row[0]["id"] > 1){
            return $row[0]['url']."/";
        }
        return "";
    }
}
