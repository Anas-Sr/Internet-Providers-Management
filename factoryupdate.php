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
$new_img = $_FILES['image']['name'];
$old_img = $_POST['image-old'];

if (!empty($id) && !empty($name) && !empty($email) && !empty($pass) && !empty($address) && !empty($new_img)) {
    $success = true;
    $update_img = $new_img;
    try {
        $sql = "UPDATE manufactory SET man_name='$name', image='$update_img', man_email='$email', pass='$pass'
            ,man_information='$address', status='$status', real_status='$real_status' WHERE man_id='$id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            move_uploaded_file($_FILES['image']['tmp_name'],"img/".$_FILES['image']['name']);
            unlink("img/".$old_img);
        }
    } catch (PDOException $e) {
        $success = false;
        $update_img = $old_img;
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