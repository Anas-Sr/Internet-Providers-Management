<?php
include 'conn.php';
if (isset($_POST['edita'])) {
    foreach($_POST['id'] as $key => $value){
        $manid = $value;
        $deffid = $_POST['pid'][$key];
        $plusavr = $_POST['avg'][$key];
        $sql = "UPDATE bills SET plus_avr ='$plusavr' WHERE deff_id = '$deffid' AND man_id = '$manid'";
        $query = mysqli_query($conn,$sql);
        if($query){
            header("location:factory_management.php?id=".$deffid);
        }
    }
}