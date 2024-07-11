<?php
include 'conn.php';
$id = $_GET['id'];
$sql = "UPDATE manufactory SET real_status = 1 WHERE man_id='$id'";
$query = mysqli_query($conn,$sql);
if($query){
    header('location:syr.php');
}