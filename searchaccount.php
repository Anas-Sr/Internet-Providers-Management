<?php

include 'conn.php';
if (isset($_POST['search']) && !empty($_POST['name'])) {
    $search = $_POST['name'];
    $sql = "SELECT * FROM allaccount WHERE kind = 0 AND fullname LIKE '$search%' ";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "error" . mysqli_error($conn);
    }
    if (mysqli_num_rows($query) > 0) {
        while ($result = mysqli_fetch_assoc($query)) {
            $id = $result['id'];
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
                        <th>العمليات | الحالة</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="id"><?php echo $result['id']; ?></td>
                        <td data-label="الاسم الكامل"><a href="profile.php?id=<?php echo $result['id']; ?>" style="text-decoration: none; color: black; font-weight: bolder;"><?php echo $result['fullname']; ?></a></td>
                        <td data-label="الايميل | البريد الالكتروني"><?php echo $result['a_email']; ?></td>
                        <td data-label="نوع الحساب"><?php echo "حساب تاجر"; ?></td>
                        <td data-label="الرصيد الحالي"><?php echo $result['real_cash']; ?></td>
                        <td data-label="الرصيد المدين"><?php echo $result['image_cash']; ?></td>
                        <td data-label="العمليات | الحالة">
                <?php
                if ($result['status'] == 1) {
                    echo "<a href='accountstatus.php?id=$id' class='btn' style='width: 120px;'>" . "مفعل" . "</a>";
                } else {
                    echo "<a href='accountdown.php?id=$id' class='btn' style='background-color:red; width: 120px;'>غير مفعل</a>";
                }
                ?>
                <a href='deleteaccount.php?id=<?php echo $id;?>' class='btn' style='background-color:red; width: 120px;' onclick="return confirm('هل أنت متأكد؟')">حذف الحساب</a>
            </td>
                    </tr>
        <?php
        }
    } else {
        echo "<div style='text-align:center; padding: 8px; font-size: 20px; font-weight: bolder;'>" . "لا يوجد شخص أو حساب بهذا الاسم" . "</div>";
    }
}
        ?>