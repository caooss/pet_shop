<?php
    include("../inc/cabecalho_conexao.php");

    $cons="SELECT * FROM animal";

    $query=mysqli_query($con, $cons);
    if($cons){
        if(mysqli_num_rows($query)>0){
            echo '<table border=1>
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
                        <td><button><a href="">Editar</a></button></td>
                        <td><button><a href="../excluir_animal.php?id='.$resultado["id"].'">Excluir</a></button></td>
                      </tr>';
            }
            echo "</table>";

        }else{
            echo mysqli_error($con);
        }
    }else{
        echo 'Nenhum animal cadastrado!';
        echo mysqli_error($con);
    }

    echo '<br><button><a href="../index.php">Voltar</a></button>';
    mysqli_close($con);
?>
