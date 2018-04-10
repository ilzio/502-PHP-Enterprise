<?php

// md5 e sha1 -> duas senhas iguais vão ter o mesmo hash

$senha = "suca";

echo md5($senha) . "<br>";
echo sha1($senha) . "<br>";
echo sha1(md5(sha1($senha))) . "<br>";

$decri = sha1(md5(sha1($senha)));

echo sha1(md5(sha1($decri)));
echo "<br>";

//password BCRYPT -->> da um salto automatico, muda a cada vez o hash

$hash = password_hash($senha,PASSWORD_BCRYPT);
echo $hash . "<br>";

if (password_verify('suca',$hash)){
  echo "okkei mbare";
}
