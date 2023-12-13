<?php
include 'conn.php';
session_start();
include 'addaccount1.php';
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
        <div class="title">اضافة حساب جديد</div>
        <form action="addaccount.php" method="POST">
        <div class="user-details">
                <div class="input-box">
                    <span class="details">الاسم الكامل <span style="color: red;">*</span></span>
                    <input type="text" name="name" placeholder="أدخل اسم الحساب كاملا..." required>
                </div>
                <div class="input-box">
                    <span class="details">البريد الالكتروني <span style="color: red;">*</span></span>
                    <input type="email" name="email" placeholder="أدخل البريد الالكتروني للوكيل كاملا..." required>
                </div>
                <div class="input-box">
                    <span class="details">كلمة السر <span style="color: red;">*</span></span>
                    <input type="password" name="pass" placeholder="أدخل كلمة سر قوية..." required>
                </div>
                <div class="input-box">
                    <span class="details">العنوان <span style="color: red;">*</span></span>
                    <input type="text" name="address" placeholder="أدخل عنوان الوكيل كاملا..." required>
                </div>
                <div class="input-box">
                    <span class="details">رقم الهاتف <span style="color: red;">*</span></span>
                    <input type="tel" name="text" class="phone-field" placeholder="أدخل رقم الهاتف كاملا..."  style="direction: rtl;" required>
                </div>
                <div class="input-box">
                    <span class="details">التسعيرة المحددة</span>
                    <select name="kind">
                    <?php 
                            include 'conn.php';
                            $sql = "SELECT * FROM price_type";
                            $query = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($query) > 0){
                            while($price = mysqli_fetch_assoc($query)){
                                $price_id = $price['deff_id'];
                                echo "<option value='$price_id'>".$price['price_type_name']."</option>";
                            }}else{
                                header('location:NotFound.php');
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="add" value="اضافة">
                <a href="allaccount.php">
                    <input type="button" value="الرجوع لصفحة الحسابات " class="inp2">
                </a>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>

</html>