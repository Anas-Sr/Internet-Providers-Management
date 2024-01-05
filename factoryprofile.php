<?php
include 'conn.php';
session_start();

$id = $_GET['id'];
$sql = "SELECT * FROM manufactory WHERE man_id = '$id'";
$query = mysqli_query($conn, $sql);
while($result = mysqli_fetch_assoc($query)){
    $f_status = $result['status'];
    $f_real_status = $result['real_status'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/profilestyle.css">
        <style>
.profile-image{
    width: 300px;
    height: 120px;
    overflow: hidden;
    border-radius: 5px;
}
.profile-image img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
        </style>
    </head>

    <body dir="rtl">
        <div class="container">
            <div class="title"><?php echo $result['man_name']; ?></div>
            <form action="factoryupdate.php" method="POST" enctype="multipart/form-data">
                <div class="user-details">
                    <div class="input-box" style="display: none;">
                        <input type="number" name="id" value="<?php echo $result['man_id']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">اسم المزود <span style="color: red;">*</span></span>
                        <input type="text" name="name" value="<?php echo $result['man_name']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">الايميل <span style="color: red;">*</span></span>
                        <input type="email" name="email" value="<?php echo $result['man_email']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">كلمة السر <span style="color: red;">*</span></span>
                        <input type="text" name="pass" value="<?php echo $result['pass']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">معلومات إضافية <span style="color: red;">*</span></span>
                        <input type="text" name="address" value="<?php echo $result['man_information']; ?>" required>
                    </div>
                    <div class="input-box">
                    <span class="details">الحالة<span style="color: red;">*</span></span>
                    <select name="status">
                        <?php
                        if ($f_status == 1) {
                            echo "<option value='1'selected>مفعلة</option>";
                            echo "<option value='0'>غير مفعلة</option>";
                        } else {
                            echo "<option value='1'>مفعلة</option>";
                            echo "<option value='0' selected>غير مفعلة</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">طريقة الدفع<span style="color: red;">*</span></span>
                    <select name="real_status">
                        <?php
                        if ($f_real_status == 1) {
                            echo "<option value='1'selected>آلي</option>";
                            echo "<option value='0'>يدوي</option>";
                        } else {
                            echo "<option value='1'>آلي</option>";
                            echo "<option value='0' selected>يدوي</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="input-box">
                        <span class="details">شعار المزود <span style="color: red;">*</span></span>
                        <input type="file" name="image" accept=".jpg, .jpeg, .png" style="background-color: white; padding:10px;" required>
                        <input type="hidden" name="image-old"  value="<?php echo $result['image'] ;?>">
                </div>
                <div class="profile-image">
                <img src="img/<?php echo $result['image'];?>" alt="خطأ في ظهور الصورة">
                </div>
                </div>
                <div class="button">
                    <input type="submit" value="تعديل معلومات المزود">
                    <a href="factories.php">
                        <input type="button" value="الرجوع لصفحة المزودات " class="inp2">
                    </a>
                </div>
                <?php
                    }
                ?>
            </form>
        </div>

        <script src="js/script.js"></script>
    </body>

    </html>