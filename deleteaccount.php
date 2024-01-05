<?php
session_start();
include 'conn.php';

$id=$_GET['id'];

$sql="DELETE FROM allaccount WHERE id='$id'";
$query=mysqli_query($conn,$sql);

if($query){
    header('location:dashboard.php');
}
?>