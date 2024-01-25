<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $address = $_POST['address'];
    $kind = $_POST['kind'];
    if($_FILES["image"]["error"]===4){
        echo "anas";
    }else{
        $filename = $_FILES["image"]["name"];
        $filesize = $_FILES["image"]["size"];
        $tmpname = $_FILES["image"]["tmp_name"];
        $validimage = ['jpg' , 'jpeg' , 'png'];
        $imageext = explode('.',$filename);
        $imageext = strtolower(end($imageext));
        if(!in_array($imageext,$validimage)){
            ?>
            <link rel="stylesheet" href="css/userupdate.css">
            <section id="popup" style="height: calc(60vmin - 40px);">
                <h1><?php echo  "فشل الاضافة" ;?></h1>
                <p class="p"><?php echo " الصور المضافة يجب أن تكون من لاحقة jpg jpeg png ... "; ?></p>
                <button>
                    <a href="addp_factory.php">موافق</a>
                </button>
            </section>
            <?php
        }elseif($filesize > 1000000){
            ?>
            <link rel="stylesheet" href="css/userupdate.css">
            <section id="popup" style="height: calc(60vmin - 40px);">
                <h1><?php echo  "فشل الاضافة" ;?></h1>
                <p class="p"><?php echo "الصورة التي اخترتها حجمها  كبير ... "; ?></p>
                <button>
                    <a href="addp_factory.php">موافق</a>
                </button>
            </section>
            <?php
        }else{
            $newimage = uniqid();
            $newimage .= '.' . $imageext;
            move_uploaded_file($tmpname, 'img/'.$newimage);
        
    if (!empty($name) && !empty($email)  && !empty($pass) && !empty($address)) {
        $sql = "INSERT INTO manufactory (man_name,image,man_email,pass,man_information,status,kind)
    VALUES ('$name','$newimage','$email','$pass','$address','$kind',1)";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            header('location:payment-factory.php');
        }
    } else {
        echo "أحد الحقول فارغة يرجى ملؤها";
    }
}}}
