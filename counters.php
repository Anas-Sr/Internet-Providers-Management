<?php
include 'conn.php';
$sql1 = "SELECT count(id) FROM allaccount WHERE kind = 1";
$query1 = mysqli_query($conn,$sql1);
while($res1 = mysqli_fetch_assoc($query1)){
    $r1 =  $res1['count(id)'];
}
$sql2 = "SELECT count(id) FROM allaccount WHERE kind = 0";
$query2 = mysqli_query($conn,$sql2);
while($res2 = mysqli_fetch_assoc($query2)){
    $r2 =  $res2['count(id)'];
}
$sql3 = "SELECT count(man_id) FROM manufactory WHERE kind = 0";
$query3 = mysqli_query($conn,$sql3);
while($res3 = mysqli_fetch_assoc($query3)){
    $r3 =  $res3['count(man_id)'];
}
$sql5 = "SELECT count(man_id) FROM manufactory WHERE kind = 0";
$query5 = mysqli_query($conn,$sql5);
while($res5 = mysqli_fetch_assoc($query5)){
    $r5 =  $res5['count(man_id)'];
}
$sql4 = "SELECT count(deff_id) FROM price_type";
$query4 = mysqli_query($conn,$sql4);
while($res4 = mysqli_fetch_assoc($query4)){
    $r4 =  $res4['count(deff_id)'];
}
$sql6 = "SELECT count(man_id) FROM manufactory WHERE kind = 1";
$query6 = mysqli_query($conn,$sql6);
while($res6 = mysqli_fetch_assoc($query6)){
    $r6 =  $res6['count(man_id)'];
}
