<?php

$nome_completo = filter_input(INPUT_POST, 'nome_completo');
$telefone = filter_input(INPUT_POST, 'telefone');

if(empty($nome_completo) or empty($telefone)){
    die('Informe todos os campos para participar');
}

$link = mysqli_connect('localhost','root','flexxo','sorteio');
$result = mysqli_query($link, "insert into sorteio.participantes(nome_completo, telefone) values('$nome_completo','$telefone');");

if($result){
    echo "PARABENS!!!<br> Você está participando do sorteio";
}else{
    echo "Desculpe, não foi possível processar sua participação";
}