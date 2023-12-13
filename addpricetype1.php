<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $status = $_POST['status'];

    if (!empty($name)) {
        $sql = "INSERT INTO price_type (price_type_name,status)
    VALUES ('$name','$status')";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            header('location:allprices.php');
        }
    } else {
        echo "أحد الحقول فارغة يرجى ملؤها";
    }
}