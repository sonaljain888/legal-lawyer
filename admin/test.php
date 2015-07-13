<?php 
        include 'db.php';
            $query =  mysql_query("select * from country where id=1");
           
           echo $query;
        
      ?>