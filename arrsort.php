<?php
// php arrsort.php 
$dados = array(
    array("id" => 1, "nome" => "João", "idade" => 35),
    array("id" => 2, "nome" => "Maria", "idade" => 28),
    array("id" => 3, "nome" => "Pedro", "idade" => 42),
);

function compareNames($a, $b) {
    return strcmp($a['nome'], $b['nome']);
}

usort($dados, 'compareNames');


foreach ($dados as $pessoa) {
    echo "ID: " . $pessoa['id'] . ", Nome: " . $pessoa['nome'] . ", Idade: " . $pessoa['idade'] . PHP_EOL;
}

echo PHP_EOL;