<?php
        $sql4 = "SELECT * FROM manufactory";
        $query4 = mysqli_query($conn, $sql4);
        if (mysqli_num_rows($query4) > 0) {
            while ($result4 = mysqli_fetch_assoc($query4)) {
                $man_id = $result4['man_id'];
                $man_name = $result4['man_name'];
                    $output =
                    "<div class='input-box' style='display:none;'>
                        <span class='details'>p-id</span>
                        <input type='text' name='id1[]' value='$p_id' readonly>
                    </div>" .
                    "<div class='input-box'>
                        <span class='details'>" . $man_name . "<span style='color: red;'>*</span></span>
                        <input type='text' name='avg[]'";
            $output .=
            "' placeholder=' أدخل النسبة الأولية  ...'  required>"
                    . "</div>";
                    
            echo $output;
                echo "<div class='input-box' style='display:none;'>
            <span class='details'>man-id</span>
            <input type='text' name='id2[]' value='$man_id' readonly>
        </div>";
        
            }
} else {
    echo "<div style='font-weight:bold; font-size:20px';>" . "...يجب عليك اضافة المزودات/الشركات أولا قبل تحديد النسبة" .
    "<br>"."أو لأن جميع الشركات مرتبطة بهذه التسعيرة". "</div>";
}
