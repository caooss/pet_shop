<?php
    include('../inc/cabecalho_conexao.php');

    $rg=$_GET["rg"];

    $sql="DELETE FROM dono WHERE rg=$rg";

    header("Location: ../cons/cons_donos.php");

    include('../inc/rodape_conexao.php');
?>
