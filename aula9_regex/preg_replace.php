<?php

$cpf = '11122233344';

$regex = '/([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})/';

echo preg_replace($regex, '\1.\2.\3-\4', $cpf);

$string = "palmeiras tem mundial";

//quando encontrar a palavra palmeiras case insensitive, substituir com corinthians na $string

echo preg_replace('/palmeiras/i', 'corinthians', $string);

$cpf = '111.222.333-44';
//quando encontrar . ou - (usa o pipe) substituia com nada

$regex = '/(\.|\-)/';
echo preg_replace($regex, '', $cpf);

echo "<br><hr>";

// CNPJ

$cnpj = "22.608.568/0001-22";

$regex = "/(\.|\-|\/)/";

echo preg_replace($regex, "", $cnpj);
echo "<br><hr>";

// CNPJ 2

$cnpj = "22608568000122";

$regex = "/([0-9]{2})([0-9]{3})([0-9]{3})([0-9]{4})([0-9]{2})/";

echo preg_replace($regex, '\1.\2.\3/\4-\5', $cnpj); //so quer aspas simples!!!! senao da erro
