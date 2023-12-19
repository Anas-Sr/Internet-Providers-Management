<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $kind = $_POST['kind'];


$qsl="SELECT a_email FROM allaccount WHERE a_email='$email'";
$q=$conn->prepare($qsl);
$q->execute();
$a=$q->fetch();

if($a){
?>
        <link rel="stylesheet" href="css/userupdate.css">
        <section id="popup" style="height: calc(60vmin - 40px);">
            <h1><?php echo  "فشل الاضافة" ;?></h1>
            <p class="p"><?php echo "الايميل مستخدم بالفعل ...جرب غيره"; ?></p>
            <button>
                <a href="addwakeel.php">موافق</a>
            </button>
        </section>
<?php
}else{

    if (!empty($name) && !empty($email) && !empty($pass) && !empty($address) && !empty($tel) && !empty($kind)) {
        $sql = "INSERT INTO allaccount (fullname,a_email,a_password,a_address,a_phone,kind,deff_id)
    VALUES ('$name','$email','$pass','$address','$tel',1,$kind)";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            header('location:wakeel.php');
        }
    } else {
        echo "أحد الحقول فارغة يرجى ملؤها";
    }
}}
