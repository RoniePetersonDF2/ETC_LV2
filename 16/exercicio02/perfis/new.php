<?php
header('Content-Type: text/html; charset=utf-8;');

include_once '../src/dao/perfildao.php';

# recebe os valores enviados do formulário via método post.
$nome = strtoupper(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));

# cria um objeto da classe PerfilDAO e chama método para realizar ação.
$dao = new PerfilDAO();
$result = $dao->new($nome);

if ($result) {
    header('location: index.php?msg=Perfil adicionado com sucesso!');
} else {
    header('location: index.php?msgNão foi possível adicionar o perfil!');
}
