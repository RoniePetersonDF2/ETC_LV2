<?php

    require_once "conta.php";

    $conta01 = new Conta();
    $conta01->saldo = 1000.0;

    echo "Seu saldo é: {$conta01->getSaldo()}";

   
