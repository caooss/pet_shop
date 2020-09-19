<?php
    $con=mysqli_connect("localhost", "rafael", "rafael");

    if (!$con) {
        echo mysqli_connect_error($con);
    }

    $db=mysqli_select_db($con, "pet_shop");

    if (!$db) {
        echo '<br>'.mysqli_error($con).'';
    }
?>
