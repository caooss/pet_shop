<?php
    include("../inc/cabecalho_conexao.php");
    $alterar=$_POST["alterar"];

        $tipo=$_POST["tipo"];
        $raca=$_POST["raca"];
        $nome=$_POST["nome"];
        $dono_rg=$_POST["dono_rg"];

        $sql="INSERT INTO animal (raca, nome, tipo, dono_rg)
              VALUE('$raca', '$nome', '$tipo', $dono_rg)";

        $txt="Animal cadastrado com sucesso!";

    include("../inc/rodape_conexao.php");
?>
