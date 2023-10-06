<?php
    require_once '../src/conexao.php';

    # solicita a conexão com o banco de dados e guarda na váriavel dbh.
    $dbh = Conexao::getConexao();

    # cria uma instrução SQL para selecionar todos os dados na tabela usuarios.
    $query = "SELECT * FROM escolabd.usuarios;"; 

    # prepara a execução da query e retorna para uma variável chamada stmt.
    $stmt = $dbh->query($query);

    # devolve a quantidade de linhas retornada pela consulta a tabela.
    $quantidadeRegistros = $stmt->rowCount();

    # busca todos os dados da tabela usuário.
    // $usuarios = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <main>
        <h1>Usuários</h1>
        <header>
            <nav>
                <a href="#">Novo</a>
            </nav>
        </header>

        <hr>

        <section>
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($quantidadeRegistros == "0"): ?>
                        <tr>
                            <td colspan="4">Não existem usuários cadastrados.</td>
                        </tr>
                    <?php else: ?>
                        <?php while($row = $stmt->fetch(PDO::FETCH_BOTH)): ?>
                        <tr>
                            <?php $status =  $row['status'] =="1"? "ATIVO" : "INATIVO"; ?>
                            <td><?php echo $row['id'];?></td>
                            <td><?= $row['nome'];?></td>
                            <td><?= $row['email'];?></td>
                            <td><?= $status;?></td>
                        </tr>
                        <?php endwhile; ?>
                    <?php endif ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>