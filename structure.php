<?php
include 'conn.php';
session_start();
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/structurestyle.css">
</head>

<body dir="rtl">
    <div class="container">
        <div class="title">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM price_type WHERE deff_id = '$id'";
            $query = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($query);
            $p_id = $result['deff_id'];
            echo $result['price_type_name'];
            ?>
        </div>
        <form action="addrealbill.php" method="POST">
            <div class="user-details">
                <?php include 'information.php';?>
                    </div>
            <div class="button" style="margin-top: 10%;">
            <?php 
                $pross = "SELECT * FROM manufactory";
                $querypross = mysqli_query($conn,$pross);
                if(mysqli_num_rows($querypross) > 0){
                    ?>
                <input type="submit" name="add" value="اضافة">
                <a href="factory_management.php?id=<?php echo $p_id;?>">
                    <input type="button" value="عرض الشركات المرتبطة" class="inp2" style="background-color: #1363DF;">
                </a>
                    <?php
                } else{
                    ?>
                <a href="factories.php">
                    <input type="button" value="+ اضافة شركات/مزودات جديدة" class="inp2" style="background-color: #1363DF;">
                </a>
                    <?php
                }
            ?>
                <a href="allprices.php">
                    <input type="button" value="الرجوع لصفحة التساعير " class="inp2">
                </a>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>

</html>