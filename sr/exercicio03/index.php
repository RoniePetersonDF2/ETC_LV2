<?php
    # metodo PHP usado para que possamos usar acentuação.
    header('Content-Type: text/html; charset=utf-8;');

    include 'src/veiculo.php';

    # criando instancia da classe Veiculo e armazenando na variável $corsa.
    # quando usamos parâmetros em métodos construtores, é o obrigatório passar o valor. 
    $corsa = new Veiculo("Preto", "Alcool", "Chevrolet", "Corsa 1.0");
    # acessando ou lendo o valor do atributo cor.
    echo "A cor do meu Corsa é: {$corsa->cor}"; 