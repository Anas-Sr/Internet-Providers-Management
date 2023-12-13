<?php
include 'conn.php';
if (isset($_POST['add'])) {
    foreach($_POST['id2'] as $key => $value){
        $manid = $value;
        $deffid = $_POST['id1'][$key];
        $plusavr = $_POST['avg'][$key];
        $sql = "INSERT INTO bills (deff_id,man_id,real_price,plus_avr,status)
        VALUES ($deffid, $manid, 0, $plusavr, 0)";
        $query = mysqli_query($conn,$sql);
        if($query){
            header('location:allprices.php');
        }
    }
}
