<?php
    include('../inc/cabecalho_conexao.php');

    echo '<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <title></title>
        </head>
        <body>';
            if (empty($_POST)) {
                echo '
                    <form action="#" method="post">
                        <fieldset>
                            <label>Qual o nome do animal que deseja encontrar? </label>
                            <input type="text" name="nome_animal"/>

                            <input type="submit" value="Pesquisar"/>
                            <button><a href="../index.php">Voltar</a></button>
                        </fieldset>
                ';
            }else{
                $nome_animal=$_POST["nome_animal"];
                $cons="SELECT * FROM animal WHERE nome='$nome_animal'";

                $query=mysqli_query($con, $cons);
                if($query){
                    if(mysqli_num_rows($query)>0){
                        echo '
                             <table border=1>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo</th>
                                    <th>Raça</th>
                                    <th>Nome</th>
                                    <th>RG do Dono</th>
                                    <th colspan=2>Ação</th>
                                </tr>';
                                while (($resultado=mysqli_fetch_assoc($query))!=null) {
                                    echo '<tr>
                                            <td>'.$resultado["id"].'</td>
                                            <td>'.$resultado["tipo"].'</td>
                                            <td>'.$resultado["raca"].'</td>
                                            <td>'.$resultado["nome"].'</td>
                                            <td>'.$resultado["dono_rg"].'</td>
                                            <td><button><a href="../editar/editar_animal.php?id='.$resultado["id"].'">Editar</a></button></td>
                                            <td><button><a href="../excluir/excluir_animal.php?id='.$resultado["id"].'">Excluir</a></button></td>
                                          </tr>';
                                }
                                echo '</table>';
                    }else{
                        echo "O animal com este nome não está cadastrado";
                        echo mysqli_error($con);
                    }
                }else{
                    echo mysqli_error($con);
                }

                echo '<br><button><a href="../index.php">Voltar</a></button>';
                mysqli_close($con);
            }

        echo '
            </form>
        </body>
    </html>';
?>
