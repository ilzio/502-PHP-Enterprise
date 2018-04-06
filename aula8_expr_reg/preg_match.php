<?php

$cpf = "111.222.333-44";

$regex = '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/';
//preg_match antes a expr regular, logo a string para testar, retorna true ou false
if (preg_match($regex, $cpf)){
  echo "CPF valido ";
}else {
  echo "CPF invalido";
}

echo "<hr>";

$placa = "AAA-1234";

$regex1 = '/^[A-Z]{3}-[0-9]{4}$/';
//preg_match antes a expr regular, logo a string para testar, retorna true ou false
if (preg_match($regex1, $placa)){
  echo "Placa valida ";
}else {
  echo "Placa invalida";
}


echo "<hr>";

$cnpj = "22.608.656/0001-22";

$regex2 = '/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2}$/';
//preg_match antes a expr regular, logo a string para testar, retorna true ou false
if (preg_match($regex2, $cnpj)){
  echo "CNPJ valida ";
}else {
  echo "CNPJ invalida";
}
