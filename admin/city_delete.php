<?php include 'db.php'; 
if(isset($_GET['id']))
{
$id=$_GET['id'];
$delete = mysql_query("DELETE FROM city WHERE city_id='$id'", $conn);
if($delete)
{
header('location:city.php');
}
}
?>