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
        <h3 class="collapsible">Registrar Mercadoria</h3>

        <div class="form_send">

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Código da Mercadoria</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Tipo da Mercadoria</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Nome da Mercadoria</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Quantidade</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Preço</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <select>
                                <option value="" disabled selected>Escolha sua Opção</option>
                                <option value="compra">Compra</option>
                                <option value="venda">Venda</option>
                            </select>
                            <label>Tipo de Negócio</label>
                        </div>
                    </div>

                    <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                        <i class="material-icons right">send</i>
                    </button>

                </form>
            </div>

        </div>

    </div>

</body>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/main.js"></script>

</html>

