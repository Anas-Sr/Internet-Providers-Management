<?php
include 'conn.php';
if (isset($_POST['search']) && !empty($_POST['name'])) {
    $search = $_POST['name'];
    $sql = "SELECT * FROM manufactory WHERE man_name LIKE '$search%' ";
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
                        <th>الايميل | البريد الالكتروني</th>
                        <th>معلومات حول المزود</th>
                        <th>العمليات | الحالة</th>
                    </tr>
                </thead>
                <tbody>
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
                                echo "<a href='fdown.php?id=$id' class='btn'>غير مفعل</a>";
                            }
                            ?>
                        </td>
                    </tr>
        <?php
        }
    } else {
        echo "<div style='margin-right: 39%; padding: 8px; font-size: 20px; font-weight: bolder;'>" . "لا يوجد مزود خدمة بهذا الاسم" . "</div>";
    }
}
        ?>