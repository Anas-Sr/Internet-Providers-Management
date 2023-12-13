<?php
include 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/dashboardstyle.css">
    <link rel="stylesheet" href="css/wakeelstyle.css">
    <style>
        .table-container a{
    width: 190px;
    text-decoration: none;
    line-height: 35px;
    display: inline-block;
    background-color: #1363DF;
    font-weight: bolder;
    color: white;
    text-align: center;
    margin-left: 40%;
    vertical-align: middle;
    user-select: none;
    border: 2px solid none;
    font-size: 18px;
    opacity: 1;
}
    </style>
</head>
<body>
    <?php include 'sidebar.php';?>
    <div class="table-container" style="top: 45%;">
    <h1 style="text-align: center; padding: 10px;">حدث خطأ ما أثناء عملية الإضافة ❌</h1><br>
    <h2 style="text-align: center;">قد يحدث هذا بسبب <span style="color: blue;">عدم إضافة التساعير </span>←</h2><br>
    <h2 style="text-align: center;">يجب عليك <span style="color: blue;"> إضافة تسعيرة واحدة على الأقل </span>←</h2><br>
    <a href="allprices.php">إضافة تسعيرة جديدة +</a>
    </div>
    <script src="js/script.js"></script>
</body>
</html>