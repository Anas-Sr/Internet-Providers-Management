<?php
include 'conn.php';
$sql = "SELECT * FROM manufactory WHERE display = 0";
$query = mysqli_query($conn, $sql);
if (!$query) {
    echo "error" . mysqli_error($conn);
}
if (mysqli_num_rows($query) > 0) {
    while ($result = mysqli_fetch_assoc($query)) {
        $id = $result['man_id'];
?>
                    <tr>
                        <td data-label="id"><?php echo $result['man_id']; ?></td>
                        <td data-label="اسم المزود"><a href="factoryprofile.php?id=<?php echo $result['man_id']; ?>" style="text-decoration: none; color: black; font-weight: bolder;"><?php echo $result['man_name']; ?></a></td>
                        <td data-label="الشعار"><img style="width:100px; height:70px; object-fit: cover;" src="img/<?php echo $result['image'];?>" alt="خطأ في ظهور الصورة"></td>
                        <td data-label="معلومات اضافية"><?php echo $result['man_information']; ?></td>
                        <td data-label="العمليات | الحالة">
                            <?php
                            if ($result['display'] == 1) {
                                echo "<a href='dis_down.php?id=$id' class='btn'>" . "أرشفة" . "</a>";
                            } else {
                                echo "<a href='dis_update.php?id=$id' class='btn' style='background-color:red; color:white; width:190px;'>فك الأرشفة</a>";
                            }
                            ?>
                        </td>
                    </tr>
<?php
    }
} else {
    echo "<div style='text-align:center; padding:5px; font-size: 25px; font-weight:bold; font-style:italic;'>" . "لا يوجد مزودات انترنت مؤرشفة حاليا" . "</div>";
}
?>