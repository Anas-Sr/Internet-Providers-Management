<?php
include 'conn.php';

$sql = "SELECT * FROM allaccount WHERE kind = 0";
$query = mysqli_query($conn, $sql);
if (!$query) {
    echo "error" . mysqli_error($conn);
}
if (mysqli_num_rows($query) > 0) {
    while ($result = mysqli_fetch_assoc($query)) {
        $id = $result['id'];
        $deff = $result['deff_id'];
?>
        <tr>
            <td data-label="id"><?php echo $result['id']; ?></td>
            <td data-label="الاسم الكامل"><a href="profile.php?id=<?php echo $result['id']; ?>" style="text-decoration: none; color: black; font-weight: bolder;"><?php echo $result['fullname']; ?></a></td>
            <td data-label="البريد الالكتروني"><?php echo $result['a_email']; ?></td>
            <td data-label="نوع الحساب"><?php echo "حساب تاجر"; ?></td>
            <td data-label="الرصيد الحالي"><?php echo $result['real_cash']; ?></td>
            <td data-label="الرصيد المدين"><?php echo $result['image_cash']; ?></td>
            <td data-label="التسعيرة المحددة">
                <?php
                    $sql2 = "SELECT * FROM price_type WHERE deff_id = '$deff'";
                    $query2 = mysqli_query($conn,$sql2);
                        while($res = mysqli_fetch_assoc($query2)){
                            ?>
                            <a href="factory_management.php?id=<?php echo $deff;?>" style="text-decoration: none; color: black; font-weight: bolder;"><?php echo $name = $res['price_type_name'];?></a>
                            <?php
                        }
                ?>
            </td>
            <td data-label="العمليات | الحالة">
                <?php
                if ($result['status'] == 1) {
                    echo "<a href='accountstatus.php?id=$id' class='btn' style='width: 190px;'>" . "مفعل" . "</a>";
                } else {
                    echo "<a href='accountdown.php?id=$id' class='btn' style='background-color:red; width: 190px;'>غير مفعل</a>";
                }
                ?>
            </td>
        </tr>
<?php
    }
} else {
    echo "<div style='text-align:center; padding:5px; font-size: 25px; font-weight:bold; font-style:italic;'>" . "لا توجد حسابات حاليا" . "</div>";
}
?>