<?php

class Request
{

    public static function getAllRequest()
    {
        if(count ($_REQUEST))
        {
        return $_REQUEST;
        }
 else {
            return array();
 }
    }
}
?>
