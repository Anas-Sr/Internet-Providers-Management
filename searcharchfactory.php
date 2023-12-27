<?php
include 'conn.php';
if (isset($_POST['search']) && !empty($_POST['name'])) {
    $search = $_POST['name'];
    $sql = "SELECT * FROM manufactory WHERE display= 0 AND man_name LIKE '$search%' ";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "error" . mysqli_error($conn);
    }
    if (mysqli_num_rows($query) > 0) {
        while ($result = mysqli_fetch_assoc($query)) {
            $id = $result['man_id'];
?>
            <table class="table" id="table" style="margin-bottom: 50px;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>اسم المزود </th>
                        <th>شعار الشركة</th>
                        <th>معلومات حول المزود</th>
                        <th>العمليات | الحالة</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="id"><?php echo $result['man_id']; ?></td>
                        <td data-label="اسم المزود"><a href="factoryprofile.php?id=<?php echo $result['man_id']; ?>" style="text-decoration: none; color: black; font-weight: bolder;"><?php echo $result['man_name']; ?></a></td>
                        <td data-label="الشعار"><img style="width:100px; height:70px; object-fit: cover;" src="img/<?php echo $result['image'];?>" alt="خطأ في إظهار الصورة"></td>
                        <td data-label="معلومات اضافية"><?php echo $result['man_information']; ?></td>
                        <td data-label="العمليات | الحالة">
                            <?php
                            if ($result['display'] == 1) {
                                echo "<a href='dis_down.php?id=$id' class='btn'>" . "أرشفة" . "</a>";
                            } else {
                                echo "<a href='dis_update.php?id=$id' class='btn' style='background-color:red; color:white; width: 190px;'>فك أرشفة</a>";
                            }
                            ?>
                        </td>
                    </tr>
        <?php
        }
    } else {
        echo "<div style='text-align:center; padding: 8px; font-size: 20px; font-weight: bolder;'>" . "لا يوجد مزود خدمة مؤرشف بهذا الاسم" . "</div>";
    }
}
        ?>