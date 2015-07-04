<?php include 'db.php'; 
if(isset($_GET['id']))
{
$id=$_GET['id'];
$delete = mysql_query("DELETE FROM country WHERE id='$id'", $conn);
if($delete)
{
header('location:country1.php');
}
}
?>