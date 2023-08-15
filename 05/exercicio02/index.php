<?php

    require_once "usuarios.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Cadastro de usuários</h1>
    <fieldset>
        <legend>Usuários</legend>
        <form>
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" placeholder="Informe o nome do usuário" size="80" required autofocus><br>
            <label for="nome">E-mail</label><br>
            <input type="email" name="email" placeholder="Informe o e-mail do usuário" size="80" required><br>
            <label for="password">Senha</label><br>
            <input type="password" name="password" placeholder="Informe a senha do usuário" size="30" required><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </fieldset>
</body>
</html>
    