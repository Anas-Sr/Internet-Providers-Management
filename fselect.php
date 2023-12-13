<?php
include 'conn.php';
$sql = "SELECT * FROM manufactory";
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
                        <td data-label="الايميل | البريد الالكتروني"><?php echo $result['man_email']; ?></td>
                        <td data-label="معلومات اضافية"><?php echo $result['man_information']; ?></td>
                        <td data-label="العمليات | الحالة">
                            <?php
                            if ($result['status'] == 1) {
                                echo "<a href='fupdate.php?id=$id' class='btn'>" . "مفعل" . "</a>";
                            } else {
                                echo "<a href='fdown.php?id=$id' class='btn' style='background-color:red; color:white;'>غير مفعل</a>";
                            }
                            ?>
                        </td>
                    </tr>
<?php
    }
} else {
    echo "<div style='text-align:center; padding:5px; font-size: 25px; font-weight:bold; font-style:italic;'>" . "لا يوجد مزودات انترنت حاليا" . "</div>";
}
?>