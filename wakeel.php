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
    <link rel="stylesheet" href="css/wakeelstyle.css">
    <link rel="stylesheet" href="css/dashboardstyle.css">
    <title>Document</title>
    <style>
        nav{
            position: relative;
            top: -1%;
            right: -30%; 
            transform: translate(50%,50%);
            background:  #DFF6FF;
            width: 210px;
            line-height: 30px;
            padding: 2px 25px;
            border-radius: 5px;
            text-align: right;
            border: 1px solid blue;
        }
        nav label{
            color: black;
            font-size: 20px;
            display: block;
            cursor: pointer;
            font-weight: bold;
        }
        .button span{
            line-height: 35px;
        }
        nav span{
            display: none;
        }
        input{
            display: none;
        }
        [id^=btn]:checked + span {
            display: block;
        }
        @media (max-width: 750px) {
            nav{
                right: 32%;
                z-index: 1;
            }
        }
    </style>
</head>

<body dir="rtl">
    <?php
    include 'sidebar.php';
    ?>

    <div class="table-container">
        <h1 class="heading">جميع الوكلاء</h1>
        <form action="wakeel.php" method="POST">
            <input type="search" name="name" placeholder=" ابحث عن أي وكيل" style="    
    width: 350px;
    margin-right:40px;
    line-height: 35px;
    display: inline-block;
    background-color: white;
    font-weight: bolder;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    border: 1px solid #1363DF;
    border-radius: 8px;
    font-size: 14px;
    opacity: 1;
    margin-bottom: 15px;
    box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.25);">
            <input type="submit" name="search" class="bt" value="🔎بحث" style="
    width: 190px;
    margin-right:45px;
    text-decoration: none;
    border-radius: 8px;
    line-height: 35px;
    display: inline-block;
    background-color: #1363DF;
    font-weight: bolder;
    color: white;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    border: 1px solid #1363DF;
    font-size: 18px;
    opacity: 1;
    margin-bottom: 15px;
    cursor: pointer;
    box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.25);">
    
        </form>
        <nav>
            <label for="btn" class="button">المزيد من الخيارات 
                <span class="fas fa-caret-down"></span>
            </label>
            <input type="checkbox"  id="btn">
            
            <span style="color: #1363DF;">مجموع الأرصدة:
            <?php 
            include 'conn.php';
            $sql5 = "SELECT sum(real_cash) FROM allaccount WHERE kind = 1";
            $query5 = mysqli_query($conn,$sql5);
            while($res5 = mysqli_fetch_assoc($query5)){
                $r5 =  $res5['sum(real_cash)'];
            echo "<div style=' font-size :20px; font-weight:bolder;'>";
            echo $r5 ;
            echo"</div>";
        }
        ?>
            </span>
            </nav>
        <?php
        include 'search.php';
        ?>

        <table class="table" id="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>الاسم الكامل</th>
                    <th>البريد الالكتروني</th>
                    <th>نوع الحساب</th>
                    <th>الرصيد الحالي</th>
                    <th>الرصيد المدين</th>
                    <th>التسعيرة المحددة</th>
                    <th>العمليات | الحالة</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'wakeelselect.php';
                ?>
            </tbody>
        </table>
        <button style="
            width: 170px;
    text-decoration: none;
    border-radius: 8px;
    line-height: 35px;
    display: inline-block;
    background-color: #1363DF;
    font-weight: bolder;
    color: white;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    border: 1px solid #1363DF;
    font-size: 18px;
    opacity: 1;
    margin-bottom: 8px;
    cursor: pointer;
    margin-top: 15px;
    box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.25);
        "><a href="addwakeel.php" style="color: white; text-decoration: none;" onclick="btndisplay()">
                اضافة وكيل جديد <i class="fa fa-plus"></i></a>
        </button>
        <button style="
            width: 170px;
    text-decoration: none;
    border-radius: 8px;
    line-height: 35px;
    display: inline-block;
    background-color: red;
    font-weight: bolder;
    color: white;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    border: 1px solid red;
    font-size: 18px;
    opacity: 1;
    margin-bottom: 8px;
    cursor: pointer;
    margin-top: 15px;
    box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.25);
        ">
            <a href="dashboard.php" style="color: white; text-decoration: none;">
                العودة للوحة التحكم <i class="fa-solid fa-arrow-right-from-bracket" style="margin-right: 15px;"></i></a>
        </button>
    </div>
    <script src="js/script.js">
    </script>
</body>

</html>