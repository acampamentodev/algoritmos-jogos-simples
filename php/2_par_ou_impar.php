<?php

echo "Seja muito bem-vindo ao jogo de Par ou Impar\n";

$nomeJogador = readline("Identifique-se: ");

echo "Olá {$nomeJogador}, você escolhe Par ou Impar?\n";

do {
    $escolhaDoJogador = (int) readline("Digite 0 para Par ou 1 para Impar: ");
} while($escolhaDoJogador !== 0 && $escolhaDoJogador !== 1);

do {
    $maoJogador = (int) readline("Ok! Escolha um número entre 0 e 5: ");
} while($maoJogador > 5 || $maoJogador < 0);

$maoComputador = rand(0, 5);

$par = ($maoJogador + $maoComputador) % 2 === 0;

if($escolhaDoJogador === 0 && $par) {
    echo "Parabéns! Você me venceu!\n";
} else {
    echo "Uhhuuuuu! Eu venci você!\n";
}

echo "Escolha jogador: {$maoJogador}\n";
echo "Escolha computador: {$maoComputador}\n";