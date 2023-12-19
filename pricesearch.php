<?php
include 'conn.php';
if (isset($_POST['search']) && !empty($_POST['name'])) {
    $search = $_POST['name'];
    $sql = "SELECT * FROM price_type WHERE price_type_name LIKE '$search%' ";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "error" . mysqli_error($conn);
    }
    if (mysqli_num_rows($query) > 0) {
        while ($result = mysqli_fetch_assoc($query)) {
            $id = $result['deff_id'];
?>
            <table class="table" id="table" style="margin-bottom: 50px; width: 100%;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>اسم التسعيرة</th>
                        <th>العمليات | الحالة</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="id"><?php echo $result['deff_id']; ?></td>
                        <td data-label="الاسم الكامل"><a href="profile.php?id=<?php echo $result['deff_id']; ?>" style="text-decoration: none; color: black; font-weight: bolder;"><?php echo $result['price_type_name']; ?></a></td>
                        <td data-label="العمليات | الحالة">
                        <?php
                    if($result['status']==1){
                        echo "<a href='updatestatus.php?id=$id' class='btn'>"."مفعل"."</a>";
                    }else{
                        echo "<a href='down.php?id=$id' class='btn'>غير مفعل</a>";
                    }
            ?>
                        </a></td>
                    </tr>
        <?php
        }
    } else {
        echo "<div style='text-align:center; padding: 8px; font-size: 20px; font-weight: bolder;'>" . "لا توجد تسعيرة بهذا الاسم" . "</div>";
    }
}
        ?>