<?php
    include("../inc/cabecalho_conexao.php");

    if (!empty($_GET)) {
        $rg=$_GET["rg"];

        $cons="SELECT * FROM dono WHERE rg=$rg";
        $query=mysqli_query($con, $cons);
        if($query){
            if(mysqli_num_rows($query)>0){
                while(($resultado=mysqli_fetch_assoc($query))!=null){
                    $rg=$resultado["rg"];
                    $nome=$resultado["nome"];
                    $endereco=$resultado["endereco"];
                }
            }
        }
    }

    if(empty($_POST)){
        echo '
        <!DOCTYPE html>
        <html lang="pt-br" dir="ltr">
            <head>
                <meta charset="utf-8">
                <title></title>
            </head>
            <body>
                <form action="#" method="post">
                    <fieldset>
                        <label>RG</label>
                        <input type="number" name="rg_dono" value="'.$rg.'" readonly="readonly"/>

                        <label>Nome</label>
                        <input type="text" name="nome_dono" value="'.$nome.'"/>

                        <label>Endereco</label>
                        <input type="text" name="endereco_dono" value="'.$endereco.'"/>

                        <input type="submit" value="Atualizar"/>
                        <button><a href="../index.php">Voltar</a></button>
                    </fieldset>
        ';
    }else{
        $rg=$_POST["rg_dono"];
        $nome_novo=$_POST["nome_dono"];
        $endereco_novo=$_POST["endereco_dono"];

        $sql="UPDATE dono
              SET nome='$nome_novo', endereco='$endereco_novo'
              WHERE rg=$rg";

        $txt="Informações do dono atualizadas com sucesso!";

        include("../inc/rodape_conexao.php");
    }
    echo "</form>
        </body>
    </html>";

?>
