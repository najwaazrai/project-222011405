<?php 
include 'Connection.php';
$stmt=$conn->query("delete from kegiatan where nama ='".$_REQUEST["nama"]."'");
header("Location:Kegiatan.php");
echo "<script type='text/javascript'>alert('Deleted Successfuly');</script>";
header("Location:Kegiatan.php");
?>