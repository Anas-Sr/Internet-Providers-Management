<?php
include 'conn.php';
$id = $_GET['id'];
$sql = "UPDATE manufactory SET status = 0 WHERE man_id='$id'";
$query = mysqli_query($conn,$sql);
if($query){
    header('location:syr.php');
}