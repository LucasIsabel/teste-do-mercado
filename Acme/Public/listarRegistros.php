<?php
    require_once "config.php";

    $model = new \Acme\Models\Mercadoria();
    $registros = $model->listarRegistros();

var_dump($registros);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registror</title>

    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

    <div class="container">

        <!--
            campos: Código da Mercadoria, Tipo da Mercadoria, Nome da Mercadoria, Quantidade, Preço, Tipo do Negócio
        -->

        <h3 class="collapsible"> Transações Registradas </h3>

        <table>
            <thead>
            <tr>

                <th data-field="id">Código da Mercadoria</th>
                <th data-field="name">Tipo da Mercadoria</th>
                <th data-field="price">Nome da Mercadoria</th>
                <th data-field="price">Quantidade</th>
                <th data-field="price">Preço</th>
                <th data-field="price">Tipo do negócio</th>

            </tr>
            </thead>

            <tbody>

                <?php

                    /* Verificar se o retorno da busca e diferente de falso */

                    if($registros != false):
                        foreach($registros as $registro):

                    ?>

                    <tr>
                        <td><?= $registro->codigo_mercadoria ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <?php

                            endforeach;
                    ?>

                    <?php

                        /* Caso seja diferente exibir linha sem registros */

                        else:
                    ?>

                        <tr>
                            <td class="registro" colspan="6"> Não Possui Registros Armazenados </td>
                        </tr>

                    <?php

                        endif;

                    ?>

            </tbody>
        </table>

    </div>

</body>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/main.js"></script>

</html>