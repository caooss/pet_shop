<?php
    $query=mysqli_query($con, $sql);
    if($query){
        echo ''.$txt.'';
        echo '<br><button><a href="../index.php">Voltar</a></button>';
    }else{
        echo '<br>'.mysqli_error($con).'';
    }

    mysqli_close($con);
?>
