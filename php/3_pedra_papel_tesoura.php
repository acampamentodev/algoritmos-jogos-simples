<?php

echo "Seja muito bem-vindo ao jogo de PEDRA, PAPEL ou TESOURA\n";

$nomeJogador = readline("Identifique-se: ");

$opcoesDeJogada = ["PEDRA", "PAPEL", "TESOURA"];

$sorteio = rand(0, 2);

echo "Olá {$nomeJogador}, você quer PEDRA, PAPEL ou TESOURA?\n";

do {
    $escolhaJogador = (int) readline("Digite 0 para PEDRA, 1 para PAPEL e 2 para TESOURA: ");
} while($escolhaJogador > 2 or $escolhaJogador < 0);

echo "Você escolheu: {$opcoesDeJogada[$escolhaJogador]}\n";
echo "Eu escolhi: {$opcoesDeJogada[$sorteio]}\n";

if($escolhaJogador === $sorteio) {
    echo "Empatamos!";
} else {
    switch($escolhaJogador) {
        case 0:
            if($sorteio === 1) {
                echo "Eu venci!";
            } else {
                echo "Você venceu!";
            }
            break;

        case 1:
            if($sorteio === 0) {
                echo "Você venceu!";
            } else {
                echo "Eu venci!";
            }
            break;

        case 2:
            if($sorteio === 1) {
                echo "Você venceu!";
            } else {
                echo "Eu venci!";
            }
            break;
    }
}
