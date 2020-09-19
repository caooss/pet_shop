<?php
    $query=mysqli_query($con, $sql);
    if($query){
        echo ''.$txt.'';
        echo '<br><a href="index.php">Voltar</a>';
    }else{
        echo '<br>'.mysqli_error($con).'.';
    }

    mysqli_close($con);
?>
