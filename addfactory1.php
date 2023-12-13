<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $kind = $_POST['kind'];

    if (!empty($name) && !empty($email) && !empty($address)) {
        $sql = "INSERT INTO manufactory (man_name,man_email,man_information,status)
    VALUES ('$name','$email','$address','$kind')";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            header('location:factories.php');
        }
    } else {
        echo "أحد الحقول فارغة يرجى ملؤها";
    }
}
