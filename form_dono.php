<?php
    include("./inc/cabecalho.php");
?>

        <form action="cad_dono.php" method="post">

            <fieldset>
                <label>RG</label>
                <input type="number" name="rg"/>

                <label>Nome</label>
                <input type="text" name="nome"/>

                <label>Endereço</label>
                <input type="text" name="endereco"/>

                <input type="submit" value="Enviar">
            </fieldset>

        </form>

<?php
    include('./inc/rodape.php');
?>
