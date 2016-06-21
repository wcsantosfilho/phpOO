<?php

require_once ("Pessoa.php");
$pessoa1 = new Pessoa('Xico', 33);
$pessoa2 = new Pessoa('José', 44);
echo $pessoa1->correr(40);

require_once ("Produto.php");
require_once ("Tenis.php");
require_once ("TenisAdidas.php");
$produto1 = new Tenis();


$tenis = new TenisAdidas();
$tenis->getCor();


if ($tenis instanceof Pessoa) {
    echo 'É um tipo de Tenis';
} else {
    echo 'Não é um tipo de Tenis';
}


?>