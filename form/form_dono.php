<?php
    include("./inc/cabecalho.php");
?>

        <form action="../cad/cad_dono.php" method="post">

            <fieldset>
                <label>RG</label>
                <input type="number" name="rg"/>

                <label>Nome</label>
                <input type="text" name="nome"/>

                <label>Endereço</label>
                <input type="text" name="endereco"/>

                <input type="submit" value="Enviar">
                <button><a href="../index.php">Voltar</a></button>
            </fieldset>

        </form>

<?php
    include('./inc/rodape.php');
?>
