<?php
include 'conn.php';
if (isset($_POST['search']) && !empty($_POST['name'])) {
    $search = $_POST['name'];
    $sql = "SELECT * FROM allaccount WHERE kind = 1 AND fullname LIKE '$search%' ";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "error" . mysqli_error($conn);
    }
    if (mysqli_num_rows($query) > 0) {
        while ($result = mysqli_fetch_assoc($query)) {
            $id = $result['id'];
            $deff = $result['deff_id'];
?>
            <table class="table" id="table" style="margin-bottom: 50px;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>الاسم الكامل</th>
                        <th>الايميل | البريد الالكتروني</th>
                        <th>نوع الحساب</th>
                        <th>الرصيد الحالي</th>
                        <th>الرصيد المدين</th>
                        <th>التسعيرة المحددة</th>
                        <th>العمليات | الحالة</th>
                    </tr>
                </thead>
                <tbody>
        <tr>
            <td data-label="id"><?php echo $result['id']; ?></td>
            <td data-label="الاسم الكامل"><a href="profile.php?id=<?php echo $result['id']; ?>" style="text-decoration: none; color: black; font-weight: bolder;"><?php echo $result['fullname']; ?></a></td>
            <td data-label="البريد الالكتروني"><?php echo $result['a_email']; ?></td>
            <td data-label="نوع الحساب"><?php echo "وكيل معتمد"; ?></td>
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
                    echo "<a href='personstatus.php?id=$id' class='btn'>" . "مفعل" . "</a>";
                } else {
                    echo "<a href='persondown.php?id=$id' class='btn' style='background-color:red;'>غير مفعل</a>";
                }
                ?>
            </td>
        </tr>
        <?php
        }
    } else {
        echo "<div style='text-align:center; padding: 8px; font-size: 20px; font-weight: bolder;'>" . "لا يوجد شخص أو حساب بهذا الاسم" . "</div>";
    }
}
        ?>