<?php
include 'conn.php';
session_start();
include 'addpricetype1.php';
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
        <div class="title">اضافة تسعيرة جديدة</div>
        <form action="addpricetype.php" method="POST">
        <div class="user-details">
                <div class="input-box">
                    <span class="details">اسم التسعيرة <span style="color: red;">*</span></span>
                    <input type="text" name="name" placeholder="أدخل اسم التسعيرة ..." required>
                </div>
                <div class="input-box">
                    <span class="details">الحالة<span style="color: red;">*</span></span>
                    <select name="status">
                        <option value="1" selected>مفعلة</option>
                        <option value="0">غير مفعلة</option>
                    </select>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="add" value="اضافة">
                <a href="allprices.php">
                    <input type="button" value="الرجوع لصفحة التساعير " class="inp2">
                </a>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>

</html>