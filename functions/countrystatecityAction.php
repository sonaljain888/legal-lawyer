<?php
@include 'countysatecity.php';
$data= new CSCfun();
switch ($_REQUEST['action'])
{

    case 'insertcountry':$data->insertcountry();
        break;
    case 'fatchcountry':$data->fatchcountry();
        break;
    case 'updatecountry':$data->updatecountry($sid);
        break;
    case 'deletecountry':$data->deletecountry($sid);
        break;
    case 'insertstate':$data->insertstates();
        break;
    case 'fatchstate':$data->fatchstate();
        break;
    case 'updatestate':$data->updatestate($sid);
        break;
    case 'deletestate':$data->deletestate($sid);
        break;
    case 'insertcity':$data->insertcity();
        break;
    case 'fatchcity':$data->fatchcity();
        break;
    case 'updatecity':$data->updatecity($cid);
        break;
    case 'deletecity':$data->deletecity($sid);
        break;
        

}


?>
