<?php
    include('../inc/cabecalho_conexao.php');

    $id=$_GET["id"];

    $sql="DELETE FROM animal WHERE id=$id";

    header("Location: ../cons/cons_animais.php");

    include('../inc/rodape_conexao.php');
?>
