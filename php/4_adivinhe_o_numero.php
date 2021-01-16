<?php

echo "Seja muito bem-vindo ao jogo ADIVINHE O NÚMERO\n";

$nomeJogador = readline("Identifique-se: ");

$sorteio = rand(0, 100);

echo "Olá {$nomeJogador}, eu estou pensando em um número entre 0 e 100.\n";

$escolhaJogador = (int) readline("Qual número você acha que é: ");

$tentativas = 1;

while($escolhaJogador !== $sorteio) {

    if($escolhaJogador > $sorteio) {
        echo "É um número menor que {$escolhaJogador}! \n";
    } else {
        echo "É um número maior que {$escolhaJogador}! \n";
    }

    $escolhaJogador = (int) readline("Qual número você acha que é? ");

    $tentativas++;

}

echo "Parabéns, você me venceu depois de {$tentativas} tentativas!\n";

$caminhoArquivo = __DIR__ . "/ranking.txt";

$conteudo = "";

if(file_exists($caminhoArquivo)) {
    $conteudo = file_get_contents($caminhoArquivo);
}

$dataAtual = date('d/m/Y H:i:s');

file_put_contents($caminhoArquivo, $conteudo . "{$dataAtual} - {$nomeJogador}: {$tentativas}\n");