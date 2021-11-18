<?php
    $sql_image = "select * from hinhhanghoa";
    $result_image = mysqli_query($con, $sql_image);
    while ($row = mysqli_fetch_array($result_image)){
        $row['TenHinh'];
    }
