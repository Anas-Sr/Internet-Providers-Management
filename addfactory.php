<?php
include 'conn.php';
session_start();
include 'addfactory1.php';
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
        <div class="title">اضافة مزود خدمة جديد</div>
        <form action="addfactory.php" method="POST" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">اسم المزود الجديد <span style="color: red;">*</span></span>
                    <input type="text" name="name" placeholder="أدخل اسم المزود كاملا..." required>
                </div>
                <div class="input-box">
                    <span class="details">شعار الشركة<span style="color: red;"> *</span></span>
                    <input style="background-color: white; padding:10px;" type="file" name="image" accept=".jpg, .jpeg, .png" placeholder="أدخل البريد الالكتروني للمزود كاملا..." required>
                </div>
                <div class="input-box">
                    <span class="details">البريد الالكتروني للمزود/الشركة<span style="color: red;"> *</span></span>
                    <input type="email" name="email" placeholder="أدخل البريد الالكتروني للمزود كاملا..." required>
                </div>
                <div class="input-box">
                    <span class="details">كلمة السر<span style="color: red;"> *</span></span>
                    <input type="password" name="pass" placeholder="أدخل كلمة السر كاملا..." required>
                </div>
                <div class="input-box">
                    <span class="details">معلومات اضافية <span style="color: red;">*</span></span>
                    <input type="text" name="address" placeholder="أدخل معلومات اضافية عن المزود الجديد  ..." required>
                </div>
                <div class="input-box">
                    <span class="details">الحالة المحددة</span>
                    <select name="kind">
                        <option value="1" selected>مفعلة</option>
                        <option value="0">غير مفعلة</option>
                    </select>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="add" value="اضافة">
                <a href="factories.php">
                    <input type="button" value="الرجوع لصفحة المزودات " class="inp2">
                </a>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>

</html>