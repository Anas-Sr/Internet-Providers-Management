<?php
session_start();
include './conn.php';

if (isset($_POST['submit'])) {

    $emails = $_POST['email'];
    $passwd = $_POST['pass'];

    if (!empty($emails) && !empty($passwd)) {
        $sqll = "SELECT * FROM users WHERE u_email='$emails'";

        $q = mysqli_query($conn, $sqll);

        if (mysqli_num_rows($q) > 0) {

            $a = $q->fetch_assoc();
            $b = $a['rank'];
            if ($passwd == $a['pass']) {
                $_SESSION = $a;
                if (isset($_SESSION['u_email']) && $a['rank'] == '1') {
                    header('location:index.php');
                }
                if (isset($_SESSION['u_email']) && $a['rank'] == '2') {

                    header('location:dashboard.php');
                }
                if ($emails == "aknancanon@gmail.com" && $passwd == "atem") {
                    header('location:admin.php');
                }
            } else {
                ?>
        <link rel="stylesheet" href="css/userupdate.css">
        <section id="popup" style="height: calc(60vmin - 40px); width: calc(60vmin - 40px);">
            <h1><?php echo  "فشل تسجيل الدخول" ;?></h1>
            <p class="p"><?php echo "كلمة السر خاطئة.. يرجى اعادة كتابتها"; ?></p>
            <button>
                <a href="login.php">موافق</a>
            </button>
        </section>
                <?php
            }
        } else {
            ?>
            <link rel="stylesheet" href="css/userupdate.css">
            <section id="popup" style="height: calc(60vmin - 40px); width: calc(60vmin - 40px);">
                <h1><?php echo  "فشل تسجيل الدخول" ;?></h1>
                <p class="p"><?php echo "الايميل غير موجود"; ?></p>
                <button>
                    <a href="login.php">موافق</a>
                </button>
            </section>
            <?php
        }
    } else {
        ?>
            <link rel="stylesheet" href="css/userupdate.css">
            <section id="popup" style="height: calc(60vmin - 40px); width: calc(60vmin - 40px);">
                <h1><?php echo  "فشل تسجيل الدخول" ;?></h1>
                <p class="p"><?php echo "الرجاء إدخال كلمة السر"; ?></p>
                <button>
                    <a href="login.php">موافق</a>
                </button>
            </section>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>تسجيل دخول</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>
    <div class="container">
        <div class="title">TalaTell <span>تسجيل الدخول</span></div>
        <form action="login.php" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">كلمة السر</span>
                    <input type="password" name="pass" placeholder="أدخل كلمة السر" required dir="rtl">
                </div>
                <div class="input-box">
                    <span class="details">الايميل</span>
                    <input type="email" name="email" placeholder="أدخل الايميل الخاص بك " required dir="rtl">
                </div>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="سجل دخول">
            </div>
        </form>
    </div>
</body>

</html>