<?php

echo "<pre>";
//validaçoes
var_dump(filter_var('iano@iano.com', FILTER_VALIDATE_EMAIL));
var_dump(filter_var('a25', FILTER_VALIDATE_INT)); // converte de string pra inteiro se houver so numeros

//filters

var_dump(filter_var('\n\t\lucas@luca.som\n\n>*\\', FILTER_SANITIZE_EMAIL));
//filtro generico para validar o GET
var_dump(filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT));
