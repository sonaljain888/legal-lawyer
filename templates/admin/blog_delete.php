<?php include 'db.php'; 
if(isset($_GET['id']))
{
$id=$_GET['id'];
$delete = mysql_query("DELETE FROM blog WHERE b_id='$id'", $conn);
if($delete)
{
header('location:blog.php');
}
}
?>