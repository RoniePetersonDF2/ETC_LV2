<?php

    require_once "usuarios.php";

    $usuario = new Usuarios();
    $usuario->nome = "João Pedro";

    echo "<p></p>O nome do usuário é: <b>{$usuario->nome}</b></p>";
