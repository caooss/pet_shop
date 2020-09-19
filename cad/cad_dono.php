<?php
    include("../inc/cabecalho_conexao.php");

    $rg=$_POST["rg"];
    $nome=$_POST["nome"];
    $endereco=$_POST["endereco"];

    $sql="INSERT INTO dono
          VALUE ($rg, '$nome', '$endereco')";

    $txt="Operação realizada com sucesso!";

    include("../inc/rodape_conexao.php");
?>
