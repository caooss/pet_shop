<?php
    include("../inc/cabecalho.php");
    include("../inc/cabecalho_conexao.php");

?>
        <form action="../cad/cad_animal.php" method="post">
            <fieldset>
                <label>Tipo</label>
                <select name="tipo">
                    <option value="Cachorro">Cachorro</option>
                    <option value="Gato">Gato</option>
                    <option value="Passaro">Passaro</option>
                    <option value="Tartaruga">Tartaruga</option>
                    <option value="Coelho">Coelho</option>
                </select>

                <label>Raça</label>
                <input type="text" name="raca"/>

                <label>Nome</label>
                <input type="text" name="nome"/>

                <label>RG do Dono</label>
                    <?php
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
                    ?>
                <input type="submit" value="Enviar"/>
                <button><a href="../index.php">Voltar</a></button>
            </fieldset>
        </form>

<?php
    mysqli_close($con);
    include("../inc/rodape.php");
?>
