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
                <i class="fa fa-wallet"></i>
                <div class="data">
                    <p>طلبات الدفع</p>
                </div>
            </div>
            <div class="box">
                <i class="fa fa-chart-line"></i>
                <div class="data">
                    <p>السجل المالي</p>
                </div>
            </div>
            <div class="box">
                <i class="fa fa-share"></i>
                <div class="data">
                    <p> تحويل الرصيد</p>
                </div>
            </div>
            <div class="box">
                <i class="fa fa-s"></i>
                <div class="data">
                    <p>نقطة سيرياتيل</p>
                </div>
            </div>
            <div class="box">
                <i class="fa fa-m"></i>
                <div class="data">
                    <p>نقطة MTN</p>
                </div>
            </div>
            <div class="box">
            <div class="notification"><?php if($r3 != 0){echo $r3.'+';} else{echo '';}?></div>
                <i class="fa-solid fa-wifi"></i>
                <div class="data">
                <p><a href="factories.php">نقطة مزودات الانترنت</a></p>
                </div>
            </div>
            <div class="box">
            <div class="notification"><?php if($r4 != 0){echo $r4.'+';} else{echo '';}?></div>
            <i class="fa-solid fa-chart-simple"></i>
                <div class="data">
                    <p><a href="allprices.php">لائحة التساعير</a></p>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                <div class="data">
                    <p>نقطة خدمات التسديد</p>
                </div>
            </div>
            <div class="box">
                <i class="fa fa-gear"></i>
                <div class="data">
                    <p>نقطة الاعدادات الرئيسية</p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js">
    </script>
</body>

</html>