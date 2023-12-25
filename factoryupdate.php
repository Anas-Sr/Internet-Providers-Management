<?php
include 'conn.php';
session_start();

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$address = $_POST['address'];
$status = $_POST['status'];
$real_status = $_POST['real_status'];

if (!empty($id) && !empty($name) && !empty($email) && !empty($pass) && !empty($address)) {
    $success = true;
    try {
        $sql = "UPDATE manufactory SET man_name='$name', man_email='$email', pass='$pass'
            ,man_information='$address', status='$status', real_status='$real_status' WHERE man_id='$id'";
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
            <p><?php echo $success ? "تم تعديل البيانات بنجاح للمزود المسجل باسم:" : "أحد الحقول فارغة، يرجى ملؤها" ?></p>
            <p class="p"><?php echo $name; ?></p>
            <button>
                <a href="factoryprofile.php?id=<?php echo $id; ?>">الرجوع لصفحة التعديل</a>
            </button>
        </section>
    </body>

    </html>
<?php } ?>