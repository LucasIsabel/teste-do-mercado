<?php

    require "config.php";

?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Project Teste</title>

    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <div class="container">
        <h3 class="collapsible"> Registrar </h3>

        <div class="form_send">

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="codigo_mercadoria" type="text" class="validate">
                            <label for="codigo_mercadoria">Código da Mercadoria</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="tipo_mercadoria" type="text" class="validate">
                            <label for="tipo_mercadoria">Tipo da Mercadoria</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="nome_mercadoria" type="text" class="validate">
                            <label for="nome_mercadoria">Nome da Mercadoria</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="quantidade" type="text" class="validate">
                            <label for="quantidade">Quantidade</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="preco" type="text" class="validate">
                            <label for="preco">Preço</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <select id="tipo_negocio">
                                <option value="" disabled selected>Escolha sua Opção</option>
                                <option value="compra">Compra</option>
                                <option value="venda">Venda</option>
                            </select>
                            <label for="tipo_negocio">Tipo de Negócio</label>
                        </div>
                    </div>
                </form>

                <button id="btn_enviar" class="btn waves-effect waves-light">Registrar
                    <i class="material-icons right">send</i>
                </button>
            </div>

        </div>

    </div>

</body>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/main.js"></script>

</html>

