<?php
    $tarefas = [];    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Gerencidador de Tarefas</h1>
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" autofocus required>
        </fieldset>

        <h2>Tarefas</h2>
        <table>
            <thead>
                <tr>
                    <td>Nome</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tarefas as $tarefa) { ?> 
                    <tr>
                        <td><?=$tarefa?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </form>
</body>
</html>