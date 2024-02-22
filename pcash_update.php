<?php
include 'conn.php';
$id = $_GET['id'];
$sql = "UPDATE manufactory SET real_status = 0 WHERE man_id='$id' AND kind = 1";
$query = mysqli_query($conn,$sql);
if($query){
    header('location:payment-factory.php');
}