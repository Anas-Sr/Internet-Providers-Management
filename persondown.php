<?php
session_start();
include 'conn.php';
$id = $_GET['id'];

$sql = "UPDATE allaccount SET status = 1  WHERE id='$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
    header('location:wakeel.php');
}