<?php
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/dashboardstyle.css">
    <title>Document</title>
</head>

<body dir="rtl">
    <?php 
        include 'sidebar.php';
    ?>
    <div class="content" id="content">
        <span class="title-info" id="title-info">
            <p>TalaTell</p>
            <i class="fas fa-chart-bar"></i>
        </span>
        <div class="data-info" id="data-info">
        <div class="box">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <div class="data">
                    <p><a href="dashboard.php"> الصفحة الرئيسية</a></p>
                </div>
            </div>
            <div class="box">
                <div class="notification"><?php if($r1 != 0){echo $r1.'+';} else{echo '0';}?></div>
                <i class="fa fa-users"></i>
                <div class="data">
                <p><a href="addwakeel.php">إضافة وكيل جديد +</a></p>
                </div>
            </div>
            <div class="box">
                <div class="notification"><?php if($r2 != 0){echo $r2.'+';} else{echo '0';}?></div>
                <i class="fa fa-users"></i>
                <div class="data">
                <p><a href="addaccount.php">إضافة حساب جديد +</a></p>
                </div>
            </div>
            <div class="box">
                <div class="notification"><?php if($r3 != 0){echo $r3.'+';} else{echo '0';}?></div>
                <i class="fa-solid fa-wifi"></i>
                <div class="data">
                <p><a href="addfactory.php">إضافة مزود خدمة جديد +</a></p>
                </div>
            </div>
            <div class="box">
                <div class="notification"><?php if($r5 != 0){echo $r5.'+';} else{echo '0';}?></div>
                <i class="fa-solid fa-wifi"></i>
                <div class="data">
                <p><a href="archfactory.php">المزودات المؤرشفة</a></p>
                </div>
            </div>
            <div class="box">
            <div class="notification"><?php if($r4 != 0){echo $r4.'+';} else{echo '0';}?></div>
                <i class="fa-solid fa-chart-simple"></i>
                <div class="data">
                <p><a href="addpricetype.php">إضافة تسعيرة جديدة +</a></p>
                </div>
            </div>
            <div class="box">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <div class="data">
                    <p><a href="logout.php">تسجيل الخروج</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js">
    </script>
</body>

</html>