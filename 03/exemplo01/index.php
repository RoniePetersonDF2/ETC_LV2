<?php

    function imprimirNome($nome, $sobrenome="Não informado")
    {
        echo "<p>Seu nome é: $nome e sobrenome é: $sobrenome";
    }

    $nome = "João";
    $sobrenome = "Pedro";

    imprimirNome($nome, $sobrenome);
    imprimirNome("Ronie");