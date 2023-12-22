<?php
include 'conn.php';
session_start();
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/wakeelstyle.css">
    <link rel="stylesheet" href="css/dashboardstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body dir="rtl">
    <?php
    include 'sidebar.php';
    ?>
    <div class="table-container">
        <h1 class="heading" style="font-weight: bolder; font-style: normal;">
        <?php
            $sql2 = "SELECT * FROM price_type WHERE deff_id = '$id'";
            $query2 = mysqli_query($conn, $sql2);
            if(mysqli_num_rows($query2) > 0){
                $result2 = mysqli_fetch_assoc($query2);
                $num = $result2['deff_id'];
                echo $a4 = $result2['price_type_name'];
            }else{
                echo "<div style='text-align:center; padding:5px; font-size: 25px; font-weight:bold; font-style:italic;'>" . "لا يوجد تساعير حاليا" . "</div>";
            }
        ?>
        </h1>
    <form action="# //fsearch.php" method="POST">
            <select type="search" name="name"  style="
    height: 35px;    
    width: 370px;
    line-height: 35px;
    display: inline-block;
    background-color: white;
    font-weight: bolder;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    border: 1px solid #1363DF;
    border-radius: 8px;
    font-size: 19px;
    opacity: 1;
    padding:5px ;
    margin-bottom: 15px;
    box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.25);">
        <?php
        $sql6 = "SELECT * FROM bills WHERE deff_id = '$id'";
        $query6 = mysqli_query($conn,$sql6);
        if(!$query6){
            echo 'error:'. mysqli_error($conn);
        }
        if(mysqli_num_rows($query6) > 0 ){
            while($select = mysqli_fetch_assoc($query6)){
                $fac_id = $select['man_id'];
            $sqlname = "SELECT * FROM manufactory WHERE man_id = '$fac_id'";
            $queryname = mysqli_query($conn,$sqlname);
                while($resname = mysqli_fetch_assoc($queryname)){
                    $fac_name = $resname['man_name'];
                    ?>
                        <option value="<?php echo $fac_id;?>"><?php echo $fac_name;?></option>
                    <?php
                }
            }
        }else{
            ?>
                <option value="0">لا يوجد شركات مرتبطة حاليا</option>
            <?php
        }
    ?>
            </select>
            <input type="submit" name="search" class="bt" value="🔎بحث" style="
    width: 130px;
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
        <form action="edit-avarage.php" method="POST">
        <table align="center" class="table" style="width: 100%;">
            <thead>
                <tr>
                    <th style="display: none;">رقم التسعيرة</th>
                    <th style="display: none;">الرقم</th>
                    <th>اسم المورد/ الشركة</th>
                    <th>النسبة الموضوعة %</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql3 = "SELECT * FROM bills WHERE deff_id = '$id'";
                $query3 = mysqli_query($conn, $sql3);
                if (mysqli_num_rows($query3) > 0) {
                    while ($res = mysqli_fetch_assoc($query3)) {
                        $p_id = $res['deff_id'];
                        $facs = $res['man_id'];
                        $argv = $res['plus_avr'];
                        $sql4  = "SELECT * FROM manufactory WHERE man_id = '$facs'";
                        $query4 = mysqli_query($conn, $sql4);
                        while ($res2 = mysqli_fetch_assoc($query4)) {
                            $id = $res2['man_id'];
                            $name = $res2['man_name'];
                ?>
                            <tr>
                                <td style="display: none;"><input type="text" name="pid[]" value="<?php echo $p_id;?>"></td>
                                <td style="display: none;"><input type="text" name="id[]" value="<?php echo $id;?>"></td>
                                <td data-label="اسم المزود/الشركة"><a href="factoryprofile.php?id=<?php echo $id; ?>" style="text-decoration: none; color: black; font-weight: bolder;"><?php echo $name; ?></a></td>
                                <td data-label="النسبة الموضوعة"><input class="changeable-input" type="text" name="avg[]" value="<?php echo $argv; ?>" style="width:100%; padding: 7px; font-size: 20px; text-align: center; font-weight: bolder;" ></td>
                            </tr>
                <?php
                        }
                    }
                    ?>
                    <input type= "submit" name="edita"  value="تعديل  ↩"  style="
                    width: 100%;
            padding: 4px;
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
            font-size: 24px;
            opacity: 1;
            margin-bottom: 8px;
            cursor: pointer;
            margin-top: 15px;
            box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.25);">
            <?php
                } else {
                    echo "<div style='text-align:center; padding:5px; font-size: 25px; font-weight:bold;'>" . "لا يوجد شركات/مزودات مرتبطة حاليا" . "</div>";
                }
                ?>
            </tbody>
        </table>
    <button style="
        width: 100%;
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
        "
        type="button"
    >
            <a href="dashboard.php" style="color: white; text-decoration: none;">
                العودة للوحة التحكم <i class="fa-solid fa-arrow-right-from-bracket" style="margin-right: 15px;"></i></a>
        </button>
        </form>
    </div>
    <script src="js/script.js">
    </script>

</body>

</html>