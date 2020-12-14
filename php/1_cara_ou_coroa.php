<?php

echo "Seja muito bem-vindo ao jogo de CARA OU COROA\n";

$nomeJogador = readline("Identifique-se: ");

echo "Olá {$nomeJogador}, você escolhe CARA ou COROA?\n";

// Verifica se o usuário informou uma opção válida
do {
  $escolhaJogador = (int) readline("Digite 0 para CARA e 1 para COROA: ");
}
while($escolhaJogador !== 0 && $escolhaJogador !== 1);

$sorteio = rand(0, 1);

if($escolhaJogador === $sorteio) {
  echo "Parabéns, você me venceu!\n";
} else {
  echo "Uhuuuuu!!! Eu venci você!\n";
}