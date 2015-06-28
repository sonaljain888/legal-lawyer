<?php

@include('userFunction.php');
$data = new User();
//echo $r=$_REQUEST["action"];die;
switch ($_REQUEST["action"]) {

    case 'registration':$data->registration();
        break;
    case 'fatchuser':$data->fatchuser();
        break;
    case 'update':$data->userupdate();
        break;
    case 'deleteuser':$data->deleteuser();
        break;
}
?>
