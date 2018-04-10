<?php

// é similar ao explode -> $explo = explode(';', $line);
//melhor para splits multiplos faz tudo numa linha de codigo só



$line = "col1;col2";

$cols = preg_split("/;/", $line);
print_r($cols);
