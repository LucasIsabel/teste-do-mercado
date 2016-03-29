<?php

    require "config.php";

    $con = new \Acme\Models\Conexao();
    echo ($con->getCon()) ? "Conectado" : "Não Conectado";

