<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $kind = $_POST['kind'];

    if (!empty($name) && !empty($email) && !empty($pass) && !empty($address) && !empty($tel) && !empty($kind)) {
        $sql = "INSERT INTO allaccount (fullname,a_email,a_password,a_address,a_phone,kind,deff_id)
    VALUES ('$name','$email','$pass','$address','$tel',1,$kind)";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            header('location:wakeel.php');
        }
    } else {
        echo "أحد الحقول فارغة يرجى ملؤها";
    }
}
