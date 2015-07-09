<?php include 'db.php'; 
if(isset($_GET['id']))
{
$id=$_GET['id'];
$delete = mysql_query("DELETE FROM category_description WHERE cat_desc_id='$id'", $conn);
if($delete)
{
header('location:description.php');
}
}
?>