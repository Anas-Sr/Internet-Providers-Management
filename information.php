<?php
    $sql = "SELECT m.man_id, m.man_name
        FROM manufactory m
        LEFT JOIN bills b ON m.man_id = b.man_id AND b.deff_id = $id
        WHERE b.man_id IS NULL";
    $query = mysqli_query($conn, $sql);
    while ($result = mysqli_fetch_assoc($query)) {
        $man_id = $result['man_id'];
        $man_name = $result['man_name'];
            $output =
            "<div class='input-box' style='display:none;'>
                <span class='details'>p-id</span>
                <input type='text' name='id1[]' value='$p_id' readonly>
            </div>" .
            "<div class='input-box'>
                <span class='details'>" . $man_name . "<span style='color: red;'>*</span></span>
                <input type='text' name='avg[]'";
            $output .=
            "' placeholder=' أدخل النسبة الأولية  ...'
            required>"
                    . "</div>";   
            echo $output;
            echo "<div class='input-box' style='display:none;'>
                    <span class='details'>man-id</span>
                    <input type='text' name='id2[]' value='$man_id' readonly>
                </div>";
    }