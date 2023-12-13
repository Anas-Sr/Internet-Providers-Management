<?php
include 'conn.php';
$sql = "SELECT * FROM price_type";
$query = mysqli_query($conn, $sql);
if (!$query) {
    echo "error" . mysqli_error($conn);
}
if (mysqli_num_rows($query) > 0) {
    while ($result = mysqli_fetch_assoc($query)) {
        $id = $result['deff_id'];
?>
        <tr>
            <td data-label="id"><?php echo $result['deff_id']; ?></td>
            <td data-label="اسم التسعيرة"><a href="editprice.php?id=<?php echo $result['deff_id']; ?>" style="text-decoration: none; color: black; font-weight: bolder;"><?php echo $result['price_type_name']; ?></a></td>
            <td data-label="العمليات | الحالة">
                <?php
                if ($result['status'] == 1) {
                    echo "<a href='updatestatus.php?id=$id' class='btn'>" . "مفعل" . "</a>";
                } else {
                    echo "<a href='down.php?id=$id' class='btn' style='background-color:red;'>غير مفعل</a>";
                }
                ?>
                <a href="structure.php?id=<?php echo $result['deff_id']; ?>" class="btn" style="color: white;">الشركات الجديدة</a>
            </td>
        </tr>
<?php
    }
} else {
    echo "<div style='text-align:center; padding:5px; font-size: 25px; font-weight:bold;'>" . "لا يوجد تساعير حاليا" . "</div>";
}
?>