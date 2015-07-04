<?php
session_start();
include('db.php');//para sa connection sang database
if (isset($_POST['submit'])) {
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$result=mysql_query("select * from admin where username='$UserName' and passcode='$Password'",$conn)or die (mysql_error());//query sang database 

$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
		
		if ($count > 0){
                $_SESSION['id']=$row['id'];
		header('Location: template/index1.php');
		}else{
		header('Location: index.php');
		}
}
?>

