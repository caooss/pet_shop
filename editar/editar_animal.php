<?php
    include("../inc/cabecalho_conexao.php");

    if (!empty($_GET)) {
        $id=$_GET["id"];

        $cons="SELECT * FROM animal WHERE id=$id";
        $query=mysqli_query($con, $cons);
        if($query){
            if(mysqli_num_rows($query)>0){
                while(($resultado=mysqli_fetch_assoc($query))!=null){
                    $id=$resultado["id"];
                    $raca=$resultado["raca"];
                    $nome=$resultado["nome"];
                    $rg_dono=$resultado["dono_rg"];
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
                        <label>ID</label>
                        <input type="number" name="id_animal" value="'.$id.'" readonly="readonly"/>

                        <label>Nome</label>
                        <input type="text" name="nome_animal" value="'.$nome.'"/>';

                        if($rg_dono==null){
                            echo '
                            <label>RG do Dono</label>';
                                    $donos="SELECT * FROM dono";

                                    $query=mysqli_query($con, $donos);
                                    if($donos){
                                        if(mysqli_num_rows($query)>0){
                                            echo '<select name="dono_rg">';
                                            while (($resultado=mysqli_fetch_assoc($query))!=null) {
                                                echo '<option value="'.$resultado["rg"].'">'.$resultado["rg"].' - '.$resultado["nome"].'</option>';
                                        }
                                            echo '</select>';
                                        }else{
                                            echo mysqli_error($con);
                                        }
                                    }else{
                                        echo "Nenhum dono cadastrado, por favor cadastre";
                                        echo mysqli_error($con);
                                    }
                        }


                        echo '
                        <input type="submit" value="Atualizar"/>
                        <button><a href="../index.php">Voltar</a></button>
                    </fieldset>
        ';
    }else{
        $id_animal=$_POST["id_animal"];
        $nome_novo=$_POST["nome_animal"];
        $dono_rg=$_POST["dono_rg"];

        if($rg_dono==null){
            $sql="UPDATE animal
                  SET nome='$nome_novo', dono_rg=$dono_rg
                  WHERE id=$id_animal";
        }else{
            $sql="UPDATE animal
                  SET nome='$nome_novo'
                  WHERE id=$id_animal";
        }

        $txt="Animal atualizado com sucesso!";

        include("../inc/rodape_conexao.php");
    }
    echo "</form>
        </body>
    </html>";

?>
