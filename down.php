<?php
include 'conn.php';
$id = $_GET['id'];
$sql = "UPDATE price_type SET status = 1 WHERE deff_id='$id'";
$query = mysqli_query($conn,$sql);
if($query){
    header('location:allprices.php');
}