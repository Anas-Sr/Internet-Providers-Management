<?php
include 'conn.php';
session_start();
$id = $_GET['id'];
$sql = "SELECT * FROM price_type WHERE deff_id = '$id'";
$query = mysqli_query($conn, $sql);

while ($result = mysqli_fetch_assoc($query)) {
    $price_id = $result['deff_id'];
    $price_name = $result['price_type_name'];
    $price_status = $result['status'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profilestyle.css">
</head>

<body dir="rtl">
    <div class="container">
        <div class="title">تعديل معلومات التسعيرة</div>
        <form action="updatepricetype.php" method="POST">
            <div class="user-details">
                <div class="input-box" style="display: none;">
                    <span class="details">رقم التسعيرة <span style="color: red;">*</span></span>
                    <input type="text" name="id" value="<?php echo $price_id; ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">اسم التسعيرة <span style="color: red;">*</span></span>
                    <input type="text" name="name" value="<?php echo $price_name; ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">الحالة<span style="color: red;">*</span></span>
                    <select name="status">
                        <?php
                        if ($price_status == 1) {
                            echo "<option value='1'selected>مفعلة</option>";
                            echo "<option value='0'>غير مفعلة</option>";
                        } else {
                            echo "<option value='1'>مفعلة</option>";
                            echo "<option value='0' selected>غير مفعلة</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="add" value="تعديل">
                <a href="allprices.php">
                    <input type="button" value="الرجوع لصفحة التساعير " class="inp2">
                </a>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>

</html>