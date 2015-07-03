<?php

class General {

    private $url = null;
    
    public static function getPageURL($fullUrl = FALSE) {
        $pageURL = 'http';
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        if ($fullUrl) {
            return $pageURL;
        }
        return trim($_SERVER["REQUEST_URI"]);
    }

    public  function setTempalte() {
        $urlArray = $this->splitPageUrl();
        $page = new Page();
        ob_start();
        if (count($urlArray) == 0 || $urlArray[0] == "home") {
            $page->set("url", "home");
            $templateFile =  USER_TEMPLATE_FOLDER . '/index.php';
        }elseif (count($urlArray) == 1 && $urlArray[0] == "admin") {
            $templateFile =  ADMIN_TEMPLATE_FOLDER . '/index.php';
        }elseif (count($urlArray) == 1 && $urlArray[0] != "admin") {
            $page->set("url", $urlArray[0]);
            $templateFile =  USER_TEMPLATE_FOLDER . '/page.php';
        }elseif (count($urlArray) == 2 && $urlArray[0] != "admin") {
            $page->set("url", $urlArray[1]);
            $categoryDetails = $page->getPageCategoryId($urlArray[0]);
            $page->set("category_id", $categoryDetails[0]['id']);
            $templateFile =  USER_TEMPLATE_FOLDER . '/page.php';
        }
        $pageDetails = $page->getPageDetails();
        if(is_array($pageDetails) && count($pageDetails[0])){
            
            if($pageDetails[0]["page_status"]==1)
            {
                
            }
            include ($templateFile);
        }else{
            header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
            $templateFile =  USER_TEMPLATE_FOLDER . '/error.php';
            include ($templateFile);
            exit;
        }
        $contents = ob_get_contents();
        ob_clean();
        return $contents;
    }
    
    public function splitPageUrl(){
        return array_values(array_filter(explode("/", $this->url)));
    }
    
    public static function getPageTemplate($url){
        $request= Request::getAllRequest();
        if(count($request)){
            switch ($request['type'])
            {
                case 'user':
                    $user=new User();
                    $user->set("request", $request);
                    $result=$user->$request['action']();
                    
                   if($result && $request['action']=='login'){
                       
                       
                       header("Location: ".SERVER_URL ."/user/profile");
                       //echo "Location :".SERVER_URL ."/user/profile"; 
//                         
                   }
                   else{
                       header("Location: ".SERVER_URL ."/login");
                       echo 'Please Registration First';
                   }
                   
                break;
               case 'registration':
                    $user=new User();
                    $user->set("request", $request);
                    $user->$request['action']();
                   if($request['action']=='registration'){
                        header("Location: http://local.lawyer.com/user/profile");
                        //echo 'Please login ';
                   }
                   else{
                       header("Location: http://local.lawyer.com/login");
                       echo 'Please Registration First';
                   }
                   
                break; 
            }
        }
        $general = new General();
        $general->url = $url;
        return $general->setTempalte();
    }
    
    
    
    
}
?>
