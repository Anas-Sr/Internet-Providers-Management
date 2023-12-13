<?php
include 'conn.php';
session_start();

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$kind = $_POST['kind'];

if (!empty($id) && !empty($name) && !empty($email) && !empty($pass) && !empty($address) && !empty($tel)) {
    $success = true;
    try {
        $sql = "UPDATE allaccount SET fullname='$name', a_email='$email', a_password='$pass'
            ,a_address='$address', a_phone='$tel', deff_id='$kind' WHERE id='$id'";
        $query = mysqli_query($conn, $sql);
    } catch (PDOException $e) {
        $success = false;
    }
?>
    <link rel="stylesheet" href="css/userupdate.css">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <section id="popup">
            <h1><?php echo $success ? "نجاح" : "فشل" ?></h1>
            <p><?php echo $success ? "تم تعديل البيانات بنجاح للحساب المسجل باسم:" : "أحد الحقول فارغة، يرجى ملؤها" ?></p>
            <p class="p"><?php echo $name; ?></p>
            <button>
                <a href="profile.php?id=<?php echo $id; ?>">الرجوع لصفحة التعديل</a>
            </button>
        </section>
    </body>

    </html>
<?php } ?>