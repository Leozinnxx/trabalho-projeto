<?php
require "Conta.php";
require "Cliente.php";

$conta = New Conta("21 6487-6573", "Leonardo", "2.543");
$cliente = New Cliente("Leo", "534.327.243-09", "21 3764-3763", $conta);

echo "----------------------------------------------".PHP_EOL;
echo $cliente->exibirConta()->exibirNomeConta();