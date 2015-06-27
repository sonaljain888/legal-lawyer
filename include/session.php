<?php
include('db.class.php');

session_start();

if (!isset($_SESSION['id']))
{
header('Location: index.php');
}
$db=new Db();
$db->connect();
?>