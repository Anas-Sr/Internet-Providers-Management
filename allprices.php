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
</head>

<body dir="rtl">
    <?php
    include 'sidebar.php';
    ?>
    <div class="table-container">
        <h1 class="heading">جميع التساعير</h1>
        <form action="allprices.php" method="POST">
            <input type="search" name="name" placeholder=" ابحث عن أي تسعيرة" style="    
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
        <?php
        include 'pricesearch.php';
        ?>
        <table class="table" id="table" style="width: 85%;">
            <thead>
                <tr>
                    <th>id</th>
                    <th>اسم التسعيرة</th>
                    <th>العمليات | الحالة</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'priceselect.php';
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
    box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.25);"><a href="addpricetype.php" style="color: white; text-decoration: none;">
                اضافة تسعيرة جديدة <i class="fa fa-plus"></i></a>
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