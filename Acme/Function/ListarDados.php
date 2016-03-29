<?php

    require "../Public/config.php";

    $busca = new \Acme\Models\Mercadoria();

        if(isset($_POST)){
            echo ($busca->cadastrarTransacao($_POST['codigo_mercadoria'],$_POST['tipo_mercadoria'],$_POST['nome_mercadoria'],$_POST['quantidade'],$_POST['preco'],$_POST['tipo_negocio'])) ? "1" : "0";
        }


?>