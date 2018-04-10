<?php
//alem de validar, pode ser usado para capturar dados, usando terçeiro parametro;
// cria um array com cada grupo como valor de um indice
$telefone = '(11) 91234-9876';

$regex = '/^\(([0-9]{2})\) ([0-9]{5})\-([0-9]{4})/';



preg_match($regex, $telefone, $params);

print_r($params);
