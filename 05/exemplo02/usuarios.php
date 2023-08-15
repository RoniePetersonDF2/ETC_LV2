<?php

class Usuarios 
{
    public $nome;

    public function imprimeNome()
    {
        echo "<p></p>O nome do usuário é: <b>{$this->nome}</b></p>";
    }
}