<?php

$idade = 18;

echo "Você só pode entrar se for maior de 18 anos." . PHP_EOL;

if ($idade >= 18) {
  echo "Você tem $idade anos. Pode entrar" . PHP_EOL;
  echo "Pode entrar";
} else {
  echo "Você só tem $idade anos. Você não pode entrar";
}

//Condicional "ou" => '||' ou 'or'
//Condicional "e" => '&&' ou 'and'