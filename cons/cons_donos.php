<?php
    include("../inc/cabecalho_conexao.php");

    $cons="SELECT * FROM dono";

    $query=mysqli_query($con, $cons);
    if($cons){
        if(mysqli_num_rows($query)>0){
            echo '<table border=1>
                    <tr>
                        <th>RG</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th colspan=2>Ação</th>
                    </tr>';
            while (($resultado=mysqli_fetch_assoc($query))!=null) {
                echo '<tr>
                        <td>'.$resultado["rg"].'</td>
                        <td>'.$resultado["nome"].'</td>
                        <td>'.$resultado["endereco"].'</td>
                        <td><button><a href="../editar/editar_dono.php?rg='.$resultado["rg"].'">Editar</a></button></td>
                        <td><button><a href="../excluir/excluir_dono.php?rg='.$resultado["rg"].'">Excluir</a></button></td>
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
