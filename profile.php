<?php
include 'conn.php';
session_start();

$id = $_GET['id'];
$sql = "SELECT * FROM allaccount WHERE id = '$id'";
$query = mysqli_query($conn, $sql);

while ($result = mysqli_fetch_assoc($query)) {
    $deff_id = $result['deff_id'];
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
            <div class="title"><?php echo $result['fullname']; ?></div>
            <form action="userupdate.php" method="POST">
                <div class="user-details">
                    <div class="input-box" style="display: none;">
                        <input type="number" name="id" value="<?php echo $result['id']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">الاسم الكامل</span>
                        <input type="text" name="name" value="<?php echo $result['fullname']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">الايميل</span>
                        <input type="email" name="email" value="<?php echo $result['a_email']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">كلمة السر</span>
                        <input type="text" name="pass" value="<?php echo $result['a_password']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">العنوان</span>
                        <input type="text" name="address" value="<?php echo $result['a_address']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">رقم الهاتف</span>
                        <input class="phone-field" type="text" name="tel" value="<?php echo "0" . $result['a_phone']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">التسعيرة المحددة</span>
                        <select name="kind">
                        <?php
                        $sql1="SELECT * FROM price_type";
                        $query1=mysqli_query($conn,$sql1);
                        while($users=mysqli_fetch_assoc($query1)){
                            echo "<option value='".$users['deff_id']."'";
                            if($deff_id == $users['deff_id']) {echo "selected";}
                            echo ">".$users['price_type_name']."</option>";
                        }
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="تعديل معلومات الملف الشخصي">
                    <a href="dashboard.php">
                        <input type="button" value="الرجوع لصفحة التحكم " class="inp2">
                    </a>
                </div>
            </form>
        </div>

        <script src="js/script.js"></script>
    </body>

    </html>