<!DOCTYPE html>
<html>
    <head>
        <title>Tipos</title>
        <meta charset="utf-8">
        <link href="../css/estilo.css" rel="stylesheet">

    </head>
    <body>
        <div id="interface">


            <?php
            //session_start();
            include '../cabecalho.php';
            include '../bd/conectar.php';

            ini_set("display_errors", true);

            $sql = "select * from tipo order by nome";

            $resultado = mysqli_query($conexao, $sql);
            ?>

            <form action="excluir_lote.php" method="post">    

                <h3 id="cadastro">Tipos de Curso Cadastrados</h3>
                <table id="tabelaspec">

                    <tr>
                        <td class="cc">Selecionar</td><td class="cc">Nome</td><td class="cc">Descrição</td><td class="ce">Excluir</td><td class="ca">Alterar</td>
                    </tr>
                    <?php
                    while ($linha = mysqli_fetch_array($resultado)) {
                        ?>
                        <tr>
                            <td><input type="checkbox" name="id[]" value="<?= $linha['id'] ?>"</td>
                            <td><?= $linha['nome'] ?></td>
                            <td><?= $linha['descricao'] ?></td>
                            <td><a href="excluir.php?id=<?= $linha['id'] ?>">
                                    <img src="../img/excluir2.png" height="30" width="30"/></a></td>

                            <td><a href="form_alterar.php?id=<?= $linha['id'] ?>">
                                    <img src="../img/alterar2.png" height="30" width="30"/></a></td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>
                <input class="btn" type="submit" value="Excluir">

            </form>

        </div>

        <?php
        require_once '../rodape.php';
        ?>