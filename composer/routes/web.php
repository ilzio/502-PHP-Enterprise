<?php
//usando as rotas do sylex
//quando acessar / ele vai executar funcao

$app->get('/', function(){
  return Forlinux\Controller\Action\Say::hello();
});
