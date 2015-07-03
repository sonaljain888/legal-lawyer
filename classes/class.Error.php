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
class Error {
    public static function set($error = ""){
        if(!Session::read("error")){
            $err = array();
            $err[] = $error;
            Session::write("error", $err);
        }else{
            $err = Session::read("error");
            $err[] = $error;
            Session::write("error", $err);
        }
    }
    
    public static function get(){
        return Session::read($key);
    }
    
    public static function displayError()
    {
        if(!Session::read("error")){
            return FALSE;
        }
       $err= Session::read("error");
       Session::delete("error");
       $output=NULL;
       
       foreach ($err as $val){
           
            $output.="<div>".$val."</div>";
    }
    return $output;
}
}