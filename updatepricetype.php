<?php
session_start();
include 'conn.php';
$id = $_POST['id'];
$name = $_POST['name'];
$status = $_POST['status'];
$sql = "UPDATE price_type SET price_type_name = '$name',status = '$status' WHERE deff_id='$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
    header('location:allprices.php');
}
